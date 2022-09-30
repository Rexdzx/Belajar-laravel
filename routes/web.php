<?php

use App\Http\Controllers\HpController;
use App\Http\Controllers\PostController;
use App\Models\Kategori;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [PostController::class, 'home']);

Route::get('/about', [PostController::class, 'about']);




Route::get('/ifelse', function(){
    return view('ifelsebljr');
});




//halaman all post
Route::get('/blog', [PostController::class, 'index']);

// halaman sngle = /post/{post:slug} itu adalah slug dari cerita yang tadi dimasukin ke database
Route::get('/posts/{post:slug}', [PostController::class, 'tampil']);

Route::get('/kategori', function(){{ 
    return view ('categories',[
        'title' => 'Kategori lainnya',
        'categories' => Kategori::all()
    ]);
 }});

Route::get('/kategori/{kategori:slug}', function(Kategori $kategori){
        return view('kategori', [
            'title' => $kategori->nama,
            'posts' => $kategori->posts, //this
            'kategori' => $kategori->nama
        ]);
});

Route::get('/hape', [HpController::class,'hape']);
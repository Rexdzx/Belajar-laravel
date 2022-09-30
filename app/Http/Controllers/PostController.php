<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        
    return view('blog', [
        "title" => "Blog",
        "posts"  => Post::all()
    ]);
    }

    //(post $post) post kiri itu model, $post itu dari route
    //"public function tampil(post $post)" namanya route model binding variabelnya harus sama yang ada di router 'post' adalah nama modelnya
    
    public function tampil(Post $post)
    {
        return view('posts', [
        "title" => "Single Post",
        "post" => $post
    ]);
    }

    public function about()
    {
        return view('about', [
        
        "title" => "About",
        "text1" => "Halo Orang Tua",
        "text2" => "Jangan Panggil Aku Orang Tua Anak Muda",
        "image" => "img/test.jpg"

    ]);
    }

    public function home()
    {
        return view('home',[
        "title" => "Home"
    ]);
    }
}

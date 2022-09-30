<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // protected $fillable = ['nama', 'slug'];
    protected $guarded = ['id'];

    //bikin relasi karena mau dipakai di view kategori, harus sama dengan yang di router
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}

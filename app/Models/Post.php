<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // supaya bisa langsung masukkan jd tidak perlu masukkin title,excerpt,body satu-satu
    //fillable yang didalamnya yang boleh diisi, yang lain gk, sedangkan guarded hanya isinya yang tidak boleh diisi yang lainnya boleh
    // protected $fillable = ['title','slug','kategori_id', 'excerpt', 'body'];
    protected $guarded = ['id'];

    //relasi table
    //belongsTo, hasMany.Kategori berasal dari model
    public function  kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

}

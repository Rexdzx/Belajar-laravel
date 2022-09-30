<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
    [
        "title" => "Tulisan Pertama",
        "slug"  => "tulisan-pertama",
        "author" => "cong-cong",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus esse enim ad obcaecati at quisquam laboriosam, eaque laborum placeat tempora commodi asperiores quis sequi vitae excepturi facilis eius iure mollitia ratione consequuntur possimus modi libero cupiditate. Atque odio doloremque consectetur voluptatem esse. Nisi sapiente quas aperiam placeat quaerat eaque consequatur dolorem! Commodi at distinctio tempore quibusdam aliquam quae totam consequatur odit iste labore, laudantium eius quia explicabo aut obcaecati maiores exercitationem expedita odio necessitatibus est voluptas deleniti eveniet. Animi, esse magni sint quam fugiat consequuntur numquam nostrum sed perferendis ver"
    ],
        [
        "title" => "Tulisan Kedua",
        "slug"  => "tulisan-kedua",
        "author" => "Muhammad Sumbul",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus esse enim ad obcaecati at quisquam laboriosam, eaque laborum placeat tempora commodi asperiores quis sequi vitae excepturi facilis eius iure mollitia ratione consequuntur possimus modi libero cupiditate. Atque odio doloremque consectetur voluptatem esse. Nisi sapiente quas aperiam placeat quaerat eaque consequatur dolorem! Commodi at distinctio tempore quibusdam aliquam quae totam consequatur odit iste labore, laudantium eius quia explicabo aut obcaecati maiores exercitationem expedita odio necessitatibus est voluptas deleniti eveniet."
    ]
];
//collect merubah array menjadi banyak fungsi
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    
    }
}
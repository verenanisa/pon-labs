<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Berita
{
    private static $berita = [
        [
            "title" => "Judul Berita Pertama",
            "slug" => "judul-tulisan-pertama",
            "body" => "Lorem ipsum dolor"
        ],
        [
            "title" => "Judul Berita Kedua",
            "slug" => "judul-tulisan-kedua",
            "body" => "Lorem ipsum dolor"
        ]
    ];

    public static function all()
    {
        return self::$berita;
    }
}

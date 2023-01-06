<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    // protected $fillable = ['judul_berita', 'slug', 'excerpt', 'isi_berita'];
    protected $guarded = ['id'];

    public function scopeFilter($query)
    {
        if (request('cariberita')) {
            return $query->where('judul_berita', 'like', '%' . request('cariberita') . '%')
                ->orWhere('isi_berita', 'like', '%' . request('cariberita') . '%');
        }
        // $query->when($filters['search'] ?? false, function ($query, $cariberita) {
        //     return $query->where('judul_berita', 'like', '%' . $cariberita . '%')
        //         ->orWhere('isi_berita', 'like', '%' . $cariberita . '%');
        // });
    }
}

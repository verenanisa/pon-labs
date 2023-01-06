<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeFilter($query)
    {
        if (request('cariinformasi')) {
            return $query->where('judul_pengumuman', 'like', '%' . request('cariinformasi') . '%')
                ->orWhere('isi_pengumuman', 'like', '%' . request('cariinformasi') . '%');
        }
        // $query->when($filters['search'] ?? false, function ($query, $cariberita) {
        //     return $query->where('judul_berita', 'like', '%' . $cariberita . '%')
        //         ->orWhere('isi_berita', 'like', '%' . $cariberita . '%');
        // });
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;

class InformasiController extends Controller
{
    public function index()
    {
        return view('informasi', [
            "title" => "Informasi",
            "informasi" => Informasi::latest()->filter()->get()
        ]);
    }
    public function show(Informasi $informasi)
    {
        // echo Berita::find($slug)->first()->judul_berita;
        // echo $slug;
        return view('isiinformasi', [
            "title" => "Informasi",
            "informasi" => $informasi
        ]);
    }
}

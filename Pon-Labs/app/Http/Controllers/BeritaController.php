<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        return view('berita', [
            "title" => "Berita",
            "berita" => Berita::latest()->filter()->get()
        ]);
        // return view('berita', [
        //     "title" => "Berita",
        //     "berita" => Berita::latest()->filter()->paginate(6)
        // ]);
        // return view('berita', [
        //     "title" => "Berita",
        //     "berita" => Berita::latest()->filter(request(['cariberita']))->get()
        // ]);
        // return view('berita', [
        //     "title" => "Berita",
        //     "berita" => Berita::latest()->get()
        //     // "berita" => Berita::all()
        // ]);
    }

    // public function show($slug)
    // {
    //     // echo Berita::find($slug)->first()->judul_berita;
    //     // echo $slug;
    //     return view('isiberita', [
    //         "title" => "Berita",
    //         "berita" => Berita::where('id', $slug)->first();
    //     ]);
    // }
    public function show(Berita $berita)
    {
        // echo Berita::find($slug)->first()->judul_berita;
        // echo $slug;
        return view('isiberita', [
            "title" => "Berita",
            "berita" => $berita
        ]);
    }
}

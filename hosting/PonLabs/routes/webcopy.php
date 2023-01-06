<?php

use App\Models\Berita;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DaftarController;


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

Route::get('/', function () {
    return view('beranda', [
        "title" => "Beranda"
    ]);
});

Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/jadwal-layanan', function () {
    return view('jadwal_layanan', [
        "title" => "Jadwal layanan"
    ]);
});

Route::get('/layanan-online', function () {
    return view('layanan_online', [
        "title" => "Layanan Online"
    ]);
});
Route::get('/pembuatan-sktm', function () {
    return view('pembuatan_sktm', [
        "title" => "Pembuatan SKTM"
    ]);
});
Route::get('/pengumuman', function () {
    return view('pengumuman', [
        "title" => "Pengumuman"
    ]);
});
Route::get('/perbaikan-kk', function () {
    return view('perbaikan_kk', [
        "title" => "Perbaikan KK"
    ]);
});
Route::get('/perbaikan-ktp', function () {
    return view('perbaikan_ktp', [
        "title" => "Perbaikan KTP"
    ]);
});
Route::get('/profil', function () {
    return view('profil', [
        "title" => "Profil"
    ]);
});
Route::get('/pusat-informasi', function () {
    return view('pusat_informasi', [
        "title" => "Pusat Informasi"
    ]);
});
Route::get('/daftar', function () {
    return view('daftar', [
        "title" => "Daftar"
    ]);
});

Route::get('/berita/{berita:slug}', [BeritaController::class, 'show']);

// Route::get('/masuk', function () {
//     return view('masuk', [
//         "title" => "Masuk"
//     ]);
// });
Route::get('/masuk', [MasukController::class, 'index']);
Route::post('/masuk', [MasukController::class, 'authenticate']);

Route::get('/daftar', [DaftarController::class, 'index']);
Route::post('/daftar', [DaftarController::class, 'store']);

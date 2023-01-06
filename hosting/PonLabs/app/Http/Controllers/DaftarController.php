<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function index()
    {
        return view('daftar.index', [
            'title' => 'Daftar',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|size:16|unique:users,nik|regex:/(0)[0-9]{9}/',
            'nama' => 'required|max:255',
            'nama_pengguna' => 'required|min:3|max:255|unique:users,nama_pengguna',
            'nomor_telepon' => 'required|min:10|max:13|unique:users,nomor_telepon|regex:/(0)[0-9]{9}/',
            'sandi' => 'required|min:3|max:255'
        ]);

        // $validatedData['sandi'] = bcrypt($validatedData['sandi']);
        $validatedData['sandi'] = Hash::make($validatedData['sandi']);

        User::create($validatedData);
        // $request->session()->flash('success', 'Pendaftaran berhasil! Silahkan masuk');
        return redirect('/masuk')->with('success', 'Pendaftaran berhasil! Silahkan masuk');
        // $request->validate([
        //     'nik' => 'required|size:16|unique:users,nik|regex:/(0)[0-9]{9}/',
        //     'namalengkap' => 'required|max:255',
        //     'namapengguna' => 'required|min:3|max:255|unique:users,nama_pengguna',
        //     'nomortelepon' => 'required|min:10|max:13|unique:users,nomor_telepon|regex:/(0)[0-9]{9}/',
        //     'katasandi' => 'required|min:3|max:255'
        // ]);
        // dd('registrasi berhasil!!');
    }
}

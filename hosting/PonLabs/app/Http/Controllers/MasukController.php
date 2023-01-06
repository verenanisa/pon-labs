<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MasukController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('masuk.index', [
            'title' => 'Masuk'
        ]);
    }

    public function authenticate(Request $request)
    {
        // validate request
        $request->validate([
            'nama_pengguna' => 'required|max:255',
            'sandi' => 'required',
        ]);
        $userInfo = User::where('nama_pengguna', '=', $request->nama_pengguna)->first();
        if (!$userInfo) {
            return back()->with('fail', 'Nama pengguna belum terdaftar.');
        } else {
            if (Hash::check($request->sandi, $userInfo->sandi)) {
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('/');
            } else {
                return back()->with('fail', 'Kata sandi salah.');
            }
        }
        // return $request->input();
        // $credentials = $request->validate([
        //     'nama_pengguna' => 'required|max:255',
        //     'sandi' => 'required',
        // ]);

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/');
        // }

        // return back()->with('loginError', 'Masuk gagal!');
        // return back()->with('loginSuccess', 'Berhasil masuk!');
    }
}

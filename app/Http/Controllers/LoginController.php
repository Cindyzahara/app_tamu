<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        // dd($request);
        $validasi = $request->validate([
            'email' => 'required',
            'password' => 'required|min:5'
        ],[
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 5 karakter'
        ]);

        if (Auth::attempt($validasi)) {
            $request->session()->regenerate();

            return redirect()->route('data_tamu.index')->with('success', 'Berhasil Login');
        }
        return back()->withErrors('Email atau password yang di masukan tidak sesuai');
    }

}

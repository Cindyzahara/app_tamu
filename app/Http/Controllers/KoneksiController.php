<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KoneksiController extends Controller
{
    public function index()
    {
        return view('koneksi.index');
    }
}

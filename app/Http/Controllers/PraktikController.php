<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PraktikController extends Controller
{
    public function index()
    {
        return view('praktikBaik.index');
    }
}

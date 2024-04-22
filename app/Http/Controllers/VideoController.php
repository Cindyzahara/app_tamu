<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $data = Video::first();
        return view('video.index', compact('data'));
    }

    public function create()
    {
        return view('video.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
        ]);

        $file = $request->file('video');
        $file->move('upload', $file->getClientOriginalName());
        $file_name = $file->getClientOriginalName();

        $insert = new Video();
        $insert->video =  $file_name;
        $insert->save();

        return redirect()->route('video.index');
        // dd($pelanggan);
        // Tamu::create($dttamu);
        // return redirect()->route('data_tamu.index')->with('success', 'Data Berhasil disimpan');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dttamu = Tamu::all();
        return view('data_tamu.index', compact('dttamu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'ttl' => 'required',
            'jabatan' => 'required',
            'angkatan' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
        ],[
            'nama.required' => 'Nama tidak boleh kosong',
            'jk.required' => 'Jenis Kelamin tidak boleh kosong',
            'ttl.required' => 'Templat Tanggal Lahir tidak boleh kosong',
            'jabatan.required' => 'Jabatan tidak boleh kosong',
            'angkatan.required' => 'Angkatan tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'no_tlp.required' => 'Nomor telepon tidak boleh kosong',
        ]); 

      
        $dttamu = [
            'nama' => $request->nama,
            'jk' => $request->jk,
            'ttl' => $request->ttl,
            'jabatan' => $request->jabatan,
            'angkatan' => $request->angkatan,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
        ];

        // dd($pelanggan);
        Tamu::create($dttamu);
        return redirect()->route('data_tamu.index')->with('success', 'Data Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

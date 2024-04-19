<?php

namespace App\Http\Controllers;

use App\Models\KegiatanPGP;
use Illuminate\Http\Request;

class GalleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KegiatanPGP::latest()->get();
        return view('gallery.index', compact('data'));
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
            'foto' => 'required|mimes:jpeg,png,jpg',
            // 'isi' => 'required|mimes:jpeg,png,jpg'
        ], [
            'foto.required' => 'Foto tidak boleh kosong',
            // 'isi.required' => 'Isi tidak boleh kosong',
            'foto.mimes' => 'Foto hannya boleh ber-ekstensi JPEG, PNG, JPG'
        ]);

        try {
            $foto_file = $request->file('foto');
            $foto_extensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . "." . $foto_extensi;
            $foto_file->move(public_path('assets/img'), $foto_nama); // KONDISINYA SUDAH TER UPLOAD KE DIREKTORY

            $data = [
                'foto' => $foto_nama,
                // 'isi' => $request->isi,
                // 'created_at' => now()
            ];
            KegiatanPGP::create($data);
            return back()->with('success', 'Berhasil Upload Foto');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal Upload Foto');
        }
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
        KegiatanPGP::find($id)->delete();
        return redirect()->route('gallery.index')->with('success', 'Data berhasil di hapus');
    }
}

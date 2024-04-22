<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Barryvdh\DomPDF\Facade\Pdf;
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
        $dttamu = Tamu::latest()->get();
        return view('data_tamu.index', compact('dttamu'));
    }

    /**
     * Show the form for creating a new resource.   
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_tamu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
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
        $dt = Tamu::find($id);
        return view('data_tamu.edit', compact('dt'));
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

        Tamu::find($id)->update($dttamu);
        return redirect()->route('data_tamu.index')->with('success', 'Data Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tamu::find($id)->delete();
        return redirect()->route('data_tamu.index')->with('success', 'Data berhasil di hapus');
    }

    // Export Pdf
    public function export_pdf() 
    {
        // mengurutkan sesuai abjad 
        $data = Tamu::orderBy('jabatan', 'asc');
        
        $data = $data->get();

        // Meneruskan parameter ke tampilan ekspor
        $pdf = PDF::loadview('data_tamu.exportPdf', ['data'=>$data]);
        $pdf->setPaper('a4', 'portrait');
        $pdf->setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        // UNTUK MENENTUKAN NAMA FILE
        $filename = date('YmdHis') . '_data_tamu';
        // untuk mendownload file pdf
        return $pdf->download($filename.'.pdf');
    }
}

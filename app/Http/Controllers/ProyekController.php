<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyek = Proyek::all();
        $testimoni = Proyek::with('testimoni')->get();
        $gambarProyek = Proyek::with('gambarProyek')->get();
        return view('proyek.index', compact('proyek', 'testimoni', 'gambarProyek'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyek.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_proyek' => 'required||',
            'lokasi_proyek' => 'required',
            'tahun_proyek' => 'required',
            'size_proyek' => 'required',
            'budget_proyek' => 'required',
            'deskripsi_proyek' => 'required',
        ]);
        Proyek::create($request->all() );
        return redirect()->route('proyek.index')->with('create', 'Proyek berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyek $proyek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyek $proyek)
    {
        $proyek = Proyek::find($proyek->id_proyek);
        return view('proyek.edit', compact('proyek'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyek $proyek)
    {
       $data = [
            'nama_proyek' => $request->nama_proyek,
            'lokasi_proyek' => $request->lokasi_proyek,
            'tahun_proyek' => $request->tahun_proyek,
            'size_proyek' => $request->size_proyek,
            'budget_proyek' => $request->budget_proyek,
            'deskripsi_proyek' => $request->deskripsi_proyek,
       ];
        $proyek->update($data);
        return redirect()->route('proyek.index')->with('update', 'Proyek berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyek $proyek)
    {
        Proyek::destroy($proyek->id_proyek);
        return redirect()->route('proyek.index')->with('hapus', 'Proyek berhasil dihapus');
    }
}

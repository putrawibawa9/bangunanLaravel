<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\GambarProyek;
use Illuminate\Http\Request;

class GambarProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gambarProyek = GambarProyek::all();
        return view('gambarProyek.index',compact('gambarProyek'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proyek = Proyek::all();
        return view('gambarProyek.create', compact('proyek'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());    
        $photo = null;
        $request->validate([
            'gambar_proyek' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $photo = time().'-'.$request->gambar_proyek->getClientOriginalName();
        $request->gambar_proyek->move(public_path('images'), $photo);
        $fields = [
            'id_proyek' => $request->id_proyek,
            'gambar_proyek' => $photo,
        ];
        GambarProyek::create($fields);
           return redirect('/gambarProyek')->with('create', 'Gambar berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(GambarProyek $gambarProyek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GambarProyek $gambarProyek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GambarProyek $gambarProyek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GambarProyek $gambarProyek)
    {
        $gambarProyek->delete();
        return redirect('/gambarProyek')->with('hapus', 'Gambar berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;
use App\Models\genre;
use App\Models\penerbit;

class bukusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = buku::all();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = buku::all();
        $penerbit = penerbit::all();
        $genre = genre::all();
        return view('buku.create', compact('buku','penerbit','genre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validasi = $request->validate([
            'nama' => 'required|max:10',
            'tanggal_terbit' => 'required',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',

        ], [
            'nama.required' => 'nama buku harus diisi.',
            'tanggal_terbit.required' => 'tanggal penerbitan harus di isi.',
            'harga.required' => 'harga buku harus di isi.',
            'harga.numeric' => 'harga buku harus berupa angka.',
            'stok.required' => 'stok buku harus di isi.',
            'stok.integer' => 'stok buku harus berupa angka bulat.',

        ]);

        $buku = new buku;
        $buku->nama = $request->nama;
        $buku->harga = $request->harga;
        $buku->stok = $request->stok;


        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('image/buku', $name);
            $buku->cover = $name;
        }

        $buku->id_penerbit= $request->id_penerbit;
        $buku->tanggal_terbit = $request->tanggal_terbit;
        $buku->id_genre = $request->id_genre;


        

        $buku->save();
        
        return redirect()->route('buku.index')->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = buku::findOrFail($id);
        $penerbit = penerbit::all();
        $genre = genre::all();
        return view('buku.show', compact('buku','penerbit','genre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = buku::findOrFail($id);
        $penerbit = penerbit::all();
        $genre = genre::all();
        return view('buku.edit', compact('buku','penerbit','genre'));
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
        $buku = buku::findOrFail($id);
        $buku->nama = $request->nama;
        $buku->harga = $request->harga;
        $buku->stok = $request->stok;


        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('image/buku', $name);
            $buku->cover = $name;
        }

        $buku->id_penerbit= $request->id_penerbit;
        $buku->tanggal_terbit = $request->tanggal_terbit;
        $buku->id_genre = $request->id_genre;
        $buku->save();
        
        return redirect()->route('buku.index')->with('success', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'data berhasil dihapus');
    }
}

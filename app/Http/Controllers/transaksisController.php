<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;
use App\Models\buku;
use App\Models\pembeli;

class transaksisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaksi = transaksi::all();
        $pembeli = pembeli::all();
        $buku = buku::all();
        return view('transaksi.create', compact('transaksi','pembeli','buku'));
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
            'tanggal_transaksi' => 'required|max:10',
            'jumlah' => 'required|integer|min:0',

        ], [
           
            'tanggal_transaksi.required' => 'tanggal transaksi buku harus di isi.',
            'jumlah.required' => 'jumlah transaksi harus di isi.',
            'jumlah.integer' => 'jumlah transaksi harus berupa angka bulat.',

        ]);
        $transaksi = new transaksi;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->id_buku = $request->id_buku;
        $transaksi->id_pembeli= $request->id_pembeli;
        

        $transaksi->save();
        
        return redirect()->route('transaksi.index')->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = transaksi::findOrFail($id);
        $pembeli = pembeli::all();
        $buku = buku::all();
        return view('transaksi.show', compact('transaksi','pembeli','buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = transaksi::findOrFail($id);
        $pembeli = pembeli::all();
        $buku = buku::all();
        return view('transaksi.edit', compact('transaksi','pembeli','buku'));
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
        $transaksi = transaksi::findOrFail($id);
        $transaksi->jumlah = $request->jumlah;
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->id_buku = $request->id_buku;
        $transaksi->id_pembeli= $request->id_pembeli;
        
        $transaksi->save();
        
        return redirect()->route('transaksi.index')->with('success', 'data berhasil diubah');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'data berhasil dihapus');
    }
}

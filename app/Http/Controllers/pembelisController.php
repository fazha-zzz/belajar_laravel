<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembeli;


class pembelisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembeli = pembeli::all();
        return view('pembeli.index', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembeli.create');
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
            'nama_pembeli' => 'required|max:10',
            'jk' => 'required|max:10',
            'telpon' => 'required|numeric|min:0',
        ], [
            'nama_pembeli.required' => 'Nama buku harus diisi.',
            'jk.required' => 'Jenis kelamin harus di pilih.',
            'telpon.required' => 'Nomor telpon pembeli harus di isi.',
            'telpon.numeric' => 'Nomor telpon pembeli harus berupa angka.',
            

        ]);
        
        $pembeli = new pembeli;
        $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->jk = $request->jk;
        $pembeli->telpon = $request->telpon;
        $pembeli->save();
        
        return redirect()->route('pembeli.index')->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembeli = pembeli::findOrFail($id);
        return view('pembeli.show', compact('pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembeli = pembeli::findOrFail($id);
        return view('pembeli.edit', compact('pembeli'));
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
        $pembeli = pembeli::findOrFail($id);
        $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->jk = $request->jk;
        $pembeli->telpon = $request->telpon;
        $pembeli->save();
        
        return redirect()->route('pembeli.index')->with('success', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembeli = pembeli::findOrFail($id);
        $pembeli->delete();

        return redirect()->route('pembeli.index')->with('success', 'data berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\telpon;
use App\Models\pengguna;



class TelponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telpon = telpon::all();
        return view('telpon.index', compact('telpon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengguna = pengguna::all();
        return view('telpon.create', compact('pengguna'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $telpon = new telpon;
        $telpon->nomor = $request->nomor;
        $telpon->id_pengguna = $request->id_pengguna;

        $telpon->save();
        
        return redirect()->route('telpon.index')->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $telpon = telpon::findOrFail($id);
        $pengguna = pengguna::all();
        return view('telpon.show', compact('telpon','pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $telpon = telpon::findOrFail($id);;
        $pengguna = pengguna::all();
        return view('telpon.edit', compact('telpon','pengguna'));
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
        $telpon = telpon::findOrFail($id);
        $telpon->nomor = $request->nomor;
        $telpon->id_pengguna = $request->id_pengguna;

        $telpon->save();
        
        
        return redirect()->route('telpon.index')->with('success', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $telpon = telpon::findOrFail($id);
        $telpon->delete();

        return redirect()->route('telpon.index')->with('success', 'data berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;


class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = product::all();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
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
            'nama_produk' => 'required|max:10',
            'merk' => 'required',
            'price' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',

        ], [
            'nama_produk.required' => 'nama produk harus diisi.',
            'merk.required' => 'merk produk harus di isi.',
            'price.required' => 'harga produk harus di isi.',
            'price.numeric' => 'harga produk harus berupa angka.',
            'stok.required' => 'stok produk harus di isi.',
            'stok.integer' => 'stok produk harus berupa angka bulat.',

        ]);
        $product = new product;
        $product->nama_produk = $request->nama_produk;
        $product->merk = $request->merk;
        $product->price = $request->price;
        $product->stok = $request->stok;
        $product->save();
        
        return redirect()->route('product.index')->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = product::findOrFail($id);
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = product::findOrFail($id);
        return view('product.edit', compact('product'));
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

        $product = product::findOrFail($id);
        $product->nama_produk = $request->nama_produk;
        $product->merk = $request->merk;
        $product->price = $request->price;
        $product->stok = $request->stok;
        $product->save();
        
        return redirect()->route('product.index')->with('success', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.index')->with('success', 'data berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\customer;
use App\Models\product;


class ordersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = order::all();
        return view('order.index', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order = order::all();
        $product = product::all();
        $customer = customer::all();
        return view('order.create', compact('order','product','customer'));
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
            'merk' => 'required',
            'price' => 'required|numeric|min:0',

        ], [
            'price.required' => 'harga harus di isi.',
            'price.numeric' => 'harga harus berupa angka.',
            'order_date.required' => 'tanggal harus di isi.',
            

        ]);
        $order = new order;
        $order->id_product= $request->id_product;
        $order->quantity = $request->quantity;
        $order->order_date = $request->order_date;
        $order->id_customer = $request->id_customer;

        $order->save();
        
        return redirect()->route('order.index')->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = order::findOrFail($id);
        $product = product::all();
        $customer = customer::all();
        return view('order.show', compact('order','product','customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = order::findOrFail($id);;
        $product = product ::all();
        $customer = customer ::all();
        return view('order.edit', compact('order','product','customer'));
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
        $order = order::findOrFail($id);
        $order->id_product= $request->id_product;
        $order->quantity = $request->quantity;
        $order->order_date = $request->order_date;
        $order->id_customer = $request->id_customer;

        $order->save();
        
        
        return redirect()->route('order.index')->with('success', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = order::findOrFail($id);
        $order->delete();

        return redirect()->route('order.index')->with('success', 'data berhasil dihapus');
    }
}

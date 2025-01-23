@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">edit data </div>
                <div class="card-body">
                    <form action="{{ route('produk.update',$produk->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="form-group mb-3">
                        <label>nama_produk</label>
                        <input type="tekt" class="form-control" name="nama_produk" value="{{ $produk->nama_produk }}">
                    </div>
                    <div class="form-group mb-3">
                        <label>harga</label>
                        <input type="tekt" class="form-control" name="harga" value="{{ $produk->harga }}">
                    </div>
                    <div class="form-group mb-3">
                        <label>stok</label>
                        <input type="tekt" class="form-control" name="stok" value="{{ $produk->stok }}">
                    </div>
                    <div class="form-group mb-3">
                        <label>ID kategori</label>
                        <select name="id_kategori"  class="forn-control">
                        @foreach($kategori as $data)
                        <option value="{{ $data->id }}"{{ $data->id == $produk->id_kategori ? 'selected' : '' }}>{{ $data->nama_kategori}}</option>
                        @endforeach
                    </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tambahkan data </div>
                <div class="card-body">
                    <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group mb-3">
                        <label>Nama produk</label>
                        <input type="tekt" class="form-control" name="nama_produk" >
                    </div>
                    <div class="form-group mb-3">
                        <label>harga</label>
                        <input type="tekt" class="form-control" name="harga" >
                    </div>
                    <div class="form-group mb-3">
                        <label>stok</label>
                        <input type="tekt" class="form-control" name="stok" >
                    </div>
                    <div class="form-group mb-3">
                        <label>ID kategori</label>
                        <select name="id_kategori"  class="forn-control">
                        @foreach($kategori as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>cover</label>
                        <input type="file" class="form-control" name="cover" >
                    </div>
                    <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
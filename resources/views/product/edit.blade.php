@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tambahkan data </div>
                <div class="card-body">
                    <form action="{{ route('product.update',$product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="form-group mb-3">
                        <label>Nama</label>
                        <input type="tekt" class="form-control" name="nama_produk" value="{{ $product->nama_produk}}">
                    </div>
                    <div class="form-group mb-3">
                        <label>Merk</label>
                        <input type="tekt" class="form-control" name="merk" value="{{ $product->merk}}">
                    </div>
                    <div class="form-group mb-3">
                        <label>Price</label>
                        <input type="tekt" class="form-control" name="price" value="{{ $product->price}}">
                    </div>
                    <div class="form-group mb-3">
                        <label>Stok</label>
                        <input type="tekt" class="form-control" name="stok" value="{{ $product->stok}}">
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
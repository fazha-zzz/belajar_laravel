@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tambahkan data ppdb</div>
                <div class="card-body">
                    <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data" disabled>
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                        <label>Nama</label>
                        <input type="tekt" class="form-control" name="nama_produk" value="{{ $product->nama_produk}}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Merk</label>
                        <input type="tekt" class="form-control" name="merk" value="{{ $product->merk}}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Price</label>
                        <input type="tekt" class="form-control" name="price" value="{{ $product->price}}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Stok</label>
                        <input type="tekt" class="form-control" name="stok" value="{{ $product->stok}}" disabled>
                    </div>
                    <a href="{{ route('product.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
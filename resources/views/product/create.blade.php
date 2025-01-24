@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tambahkan data product</div>
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group mb-3">
                        <label>Nama product</label>
                        
                        <input type="tekt" class="form-control" name="nama_produk">
                       @error('nama_produk')
                       <div class="text-danger">{{ $message }}</div>
                       @enderror
                    </div >
                    
                    <div class="form-group mb-3">
                        <label>Merk</label>
                        <input type="tekt" class="form-control" name="merk">
                        @error('merk')
                       <div class="text-danger">{{ $message }}</div>
                       @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label>Price</label>
                        <input type="tekt" class="form-control" name="price">
                        @error('price')
                       <div class="text-danger">{{ $message }}</div>
                       @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label>Stok</label>
                        <input type="tekt" class="form-control" name="stok">
                        @error('stok')
                       <div class="text-danger">{{ $message }}</div>
                       @enderror
                    </div>
                    <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
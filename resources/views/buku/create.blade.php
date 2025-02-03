@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tambahkan data </div>
                <div class="card-body">
                    <form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group mb-3">
                        <label>nama</label>
                        <input type="tekt" class="form-control" name="nama" >
                        @error('nama')
                       <div class="text-danger">{{ $message }}</div>
                       @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label>harga</label>
                        <input type="tekt" class="form-control" name="harga" >
                        @error('harga')
                       <div class="text-danger">{{ $message }}</div>
                       @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label>stok</label>
                        <input type="tekt" class="form-control" name="stok" >
                        @error('stok')
                       <div class="text-danger">{{ $message }}</div>
                       @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label>cover</label>
                        <input type="file" class="form-control" name="cover" >
                        @error('cover')
                       <div class="text-danger">{{ $message }}</div>
                       @enderror
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>ID penerbit</label>
                        <select name="id_penerbit"  class="form-select" aria-label="Default select example">
                        @foreach($penerbit as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_penerbit }}</option>
                        @endforeach
                    </select>
                    </div>

                    <div class="form-group mb-3">
                        <label>tanggal_penerbit</label>
                        <input type="date" class="form-control" name="tanggal_terbit" >
                        @error('tanggal_terbit')
                       <div class="text-danger">{{ $message }}</div>
                       @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label>ID genre</label>
                    <select name="id_genre"  class="form-select" aria-label="Default select example">
                        @foreach($genre as $data)
                        <option value="{{ $data->id }}">{{ $data->genre  }}</option>
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
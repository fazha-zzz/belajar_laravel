@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tambahkan data </div>
                <div class="card-body">
                    <form action="{{ route('buku.update',$buku->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                        <label>nama</label>
                        <input type="tekt" class="form-control" name="nama" value="{{ $buku->nama }}" disabled>
                    </div>

                    <div class="form-group mb-3">
                        <label>harga</label>
                        <input type="tekt" class="form-control" name="harga" value="{{ $buku->harga }}" disabled>
                    </div>

                    <div class="form-group mb-3">
                        <label>stok</label>
                        <input type="tekt" class="form-control" name="stok" value="{{ $buku->stok }}" disabled>
                    </div>

                    <div class="form-group mb-3">
                        <label>cover</label>
                        <img src="{{ asset('/image/buku/' . $buku->cover)}}" width="100" alt="">
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>ID penerbit</label>
                        <select name="id_penerbit"  class="form-select" aria-label="Default select example" disabled>
                        @foreach($penerbit as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_penerbit }}</option>
                        @endforeach
                    </select>
                    </div>

                    <div class="form-group mb-3">
                        <label>tanggal_penerbit</label>
                        <input type="date" class="form-control" name="tanggal_terbit" value="{{ $buku->tanggal_terbit }}" disabled>
                    </div>

                    <div class="form-group mb-3">
                        <label>ID genre</label>
                    <select name="id_genre"  class="form-select" aria-label="Default select example" disabled>
                        @foreach($genre as $data)
                        <option value="{{ $data->id }}">{{ $data->genre  }}</option>
                        @endforeach
                    </select>
                    </div>
                    <a href="{{ route('buku.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
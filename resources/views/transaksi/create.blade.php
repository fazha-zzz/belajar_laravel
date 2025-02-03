@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tambahkan data </div>
                <div class="card-body">
                    <form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group mb-3">
                        <label>jumlah</label>
                        <input type="tekt" class="form-control" name="jumlah" >
                        @error('jumlah')
                       <div class="text-danger">{{ $message }}</div>
                       @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label>tanggal_transaksi</label>
                        <input type="date" class="form-control" name="tanggal_transaksi" >
                        @error('tanggal_transaksi')
                       <div class="text-danger">{{ $message }}</div>
                       @enderror
                    </div>

                    
                    <div class="form-group mb-3">
                        <label>ID buku</label>
                        <select name="id_buku"  class="form-select" aria-label="Default select example">
                        @foreach($buku as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                        @endforeach
                    </select>
                    </div>

                    

                    <div class="form-group mb-3">
                        <label>ID pembeli</label>
                    <select name="id_pembeli"  class="form-select" aria-label="Default select example">
                        @foreach($pembeli as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_pembeli  }}</option>
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
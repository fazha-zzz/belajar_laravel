@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tambahkan data </div>
                <div class="card-body">
                    <form action="{{ route('transaksi.update',$transaksi->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                        <label>jumlah</label>
                        <input type="tekt" class="form-control" name="jumlah" value="{{ $transaksi->jumlah }}" disabled>
                    </div>

                    <div class="form-group mb-3">
                        <label>tanggal_transaksi</label>
                        <input type="tekt" class="form-control" name="tanggal_transaksi" value="{{ $transaksi->tanggal_transaksi }}" disabled>
                    </div>

                    
                    <div class="form-group mb-3">
                        <label>ID buku</label>
                        <select name="id_buku"  class="form-select" aria-label="Default select example" disabled>
                        @foreach($buku as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                        @endforeach
                    </select>
                    </div>


                    <div class="form-group mb-3">
                        <label>ID pembeli</label>
                    <select name="id_pembeli"  class="form-select" aria-label="Default select example" disabled>
                        @foreach($pembeli as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_pembeli  }}</option>
                        @endforeach
                    </select>
                    </div>
                    <a href="{{ route('transaksi.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
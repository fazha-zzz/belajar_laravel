@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tambahkan data ppdb</div>
                <div class="card-body">
                    <form action="{{ route('ppdb.update', $ppdb->id) }}" method="post" enctype="multipart/form-data" disabled>
                        @csrf
                        @method('PUT')
                    <div class="form-group mb-3">
                        <label>Nama</label>
                        <input type="tekt" class="form-control" name="nama_lengkap" value="{{ $ppdb->nama_lengkap}}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" class="form-chack-input" name="jenis_kelamin" value="laki-laki" sytle="margin-left" disabled>laki laki
                        <input type="radio" class="form-chack-input" name="jenis_kelamin" value="perempuan" sytle="margin-left" disabled>perempuan
                    </div>
                    <div class="form-group">
                        <label>agama</label>
                    <select class="form-control" name="agama" disabled>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Katorik">Katorik</option>
                    </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>alamat</label>
                        <input type="tekt" class="form-control" name="alamat" value="{{ $ppdb->alamat}}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>no.telpon</label>
                        <input type="number" class="form-control" name="telpon" value="{{ $ppdb->telpon}}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>asal sekolah</label>
                        <input type="tekt" class="form-control" name="asal_sekolah" value="{{ $ppdb->asal_sekolah}}" disabled>
                    </div>
                    
                    <a href="{{ route('ppdb.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tambahkan data ppdb</div>
                <div class="card-body">
                    <form action="{{ route('ppdb.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group mb-3">
                        <label>Nama</label>
                        <input type="tekt" class="form-control" name="nama_lengkap">
                    </div>
                    <div class="form-group mb-3">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" class="form-chack-input" name="jenis_kelamin" value="laki-laki" sytle="margin-left">laki laki
                        <input type="radio" class="form-chack-input" name="jenis_kelamin" value="perempuan" sytle="margin-left">perempuan
                    </div>
                    <div class="form-group">
                        <label>agama</label>
                    <select class="form-control" name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Katorik">Katorik</option>
                    </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>alamat</label>
                        <input type="tekt" class="form-control" name="alamat">
                    </div>
                    <div class="form-group mb-3">
                        <label>no.telpon</label>
                        <input type="number" class="form-control" name="telpon">
                    </div>
                    <div class="form-group mb-3">
                        <label>asal sekolah</label>
                        <input type="tekt" class="form-control" name="asal_sekolah">
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
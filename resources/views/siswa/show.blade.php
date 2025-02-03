@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tambahkan data siswa</div>
                <div class="card-body">
                    <form action="{{ route('siswa.update',$siswa->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="form-group mb-3">
                        <label>Nis</label>
                        <input type="number" class="form-control" name="nis" value="{{ $siswa->nis}}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Nama</label>
                        <input type="tekt" class="form-control" name="nama" value="{{ $siswa->nama}}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" class="form-chack-input" name="jenis_kelamin" value="laki-laki" sytle="margin-left" disabled>laki laki
                        <input type="radio" class="form-chack-input" name="jenis_kelamin" value="perempuan" sytle="margin-left" disabled>perempuan
                    </div>
                    <div class="form-group">
                        <label>kelas</label>
                    <select class="form-control" name="kelas" disabled>
                        <option value="XI RPL 1">XI RPL 1</option>
                        <option value="XI RPL 2">XI RPL 2</option>
                        <option value="XI RPL 3">XI RPL 3</option>
                    </select>
                    <div class="form-group mb-3">
                        <label>cover</label>
                        <img src="{{ asset('/image/siswa/' . $siswa->cover)}}" width="100" alt="">
                    </div>
                    </div>
                    <a href="{{ route('siswa.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
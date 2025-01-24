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
                        <input type="number" class="form-control" name="nis" value="{{ $siswa->nis}}">
                    </div>
                    <div class="form-group mb-3">
                        <label>Nama</label>
                        <input type="tekt" class="form-control" name="nama" value="{{ $siswa->nama}}">
                    </div>
                    <div class="form-group mb-3">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" class="form-chack-input" name="jenis_kelamin" value="laki-laki" sytle="margin-left">laki laki
                        <input type="radio" class="form-chack-input" name="jenis_kelamin" value="perempuan" sytle="margin-left">perempuan
                    </div>
                    <div class="form-group">
                        <label>kelas</label>
                    <select class="form-control" name="kelas">
                        <option value="XI RPL 1">XI RPL 1</option>
                        <option value="XI RPL 2">XI RPL 2</option>
                        <option value="XI RPL 3">XI RPL 3</option>
                    </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>cover</label>
                        <img src="{{ asset('/images/siswa/' . $siswa->cover)}}" width="100" alt="">
                        <input type="file" class="form-control" name="cover" require>
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
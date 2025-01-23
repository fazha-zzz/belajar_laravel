@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tambahkan data ppdb</div>
                <div class="card-body">
                    <form action="{{ route('pengguna.update', $pengguna->id) }}" method="post" enctype="multipart/form-data" disabled>
                        @csrf
                        @method('PUT')
                    <div class="form-group mb-3">
                        <label>Nama</label>
                        <input type="tekt" class="form-control" name="nama" value="{{ $pengguna->nama}}" disabled>
                    </div>
                    
                    <a href="{{ route('pengguna.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tambahkan data </div>
                <div class="card-body">
                    <form action="{{ route('telpon.update',$telpon->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="form-group mb-3">
                        <label>Nomor</label>
                        <input type="tekt" class="form-control" name="nomor" value="{{ $telpon->nomor }}">
                    </div>
                    <div class="form-group mb-3">
                        <label>ID pengguna</label>
                        <select name="id_pengguna"  class="forn-control">
                        @foreach($pengguna as $data)
                        <option value="{{ $data->id }}"{{ $data->id == $telpon->id_pengguna ? 'selected' : '' }}>{{ $data->nama}}</option>
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
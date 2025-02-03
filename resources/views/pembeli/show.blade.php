@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tambahkan data ppdb</div>
                <div class="card-body">
                    <form action="{{ route('pembeli.update', $pembeli->id) }}" method="post" enctype="multipart/form-data" disabled>
                        @csrf
                        @method('PUT')
                    <div class="form-group mb-3">
                        <label>Nama</label>
                        <input type="tekt" class="form-control" name="nama_pembeli" value="{{ $pembeli->nama_penerbit}}" disabled>
                    </div>

                    <div class="form-group mb-3">
                        <label>Jenis Kelamin</label>
                        <div class="form-check">
                    <input type="radio" class="form-chack-input" name="jk" value="laki-laki" sytle="margin-left" value="{{ $pembeli->nama_pembeli}}" checked disabled>
                   <label class="form-check-label" for="flexRadioDefault1">
                    {{ $pembeli->jk}}
                   </label>
                   </div>                    </div>
                    <div class="form-group mb-3">
                        <label>Telpon</label>
                        <input type="tekt" class="form-control" name="telpon" value="{{ $pembeli->telpon}}" disabled>
                    </div>
                    
                    <a href="{{ route('pembeli.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
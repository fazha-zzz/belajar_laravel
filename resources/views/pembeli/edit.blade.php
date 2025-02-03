@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tambahkan data </div>
                <div class="card-body">
                    <form action="{{ route('pembeli.update',$pembeli->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="form-group mb-3">
                        <label>Nama</label>
                        <input type="tekt" class="form-control" name="nama_pembeli" value="{{ $pembeli->nama_pembeli}}">
                    </div>
                    <div class="form-group mb-3">
                        <label>Jenis Kelamin</label><br>
                    
                    
                    <div class="form-check">
                    <input type="radio" class="form-chack-input" name="jk" value="laki-laki" sytle="margin-left">
                   <label class="form-check-label" for="flexRadioDefault1">
                    laki-laki
                   </label>
                   </div>

                  <div class="form-check">
                  <input type="radio" class="form-chack-input" name="jk" value="perempuan" sytle="margin-left">
                  <label class="form-check-label" for="flexRadioDefault2">
                  perempuan
                  </label>
                  </div>
                  </div>
                    <div class="form-group mb-3">
                        <label>Telpon</label>
                        <input type="tekt" class="form-control" name="telpon" value="{{ $pembeli->telpon}}">
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
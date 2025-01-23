@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tambahkan data customer</div>
                <div class="card-body">
                    <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group mb-3">
                        <label>Nama customer</label>
                        <input type="tekt" class="form-control" name="nama_customer">
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>gender</label><br>
                    <div class="form-check">
                    <input type="radio" class="form-chack-input" name="gender" value="laki-laki" sytle="margin-left">
                   <label class="form-check-label" for="flexRadioDefault1">
                    laki-laki
                   </label>
                   </div>

                   <div class="form-check">
                   <input type="radio" class="form-chack-input" name="gender" value="perempuan" sytle="margin-left">
                   <label class="form-check-label" for="flexRadioDefault2">
                   perempuan
                   </label>
                   </div>
                   </div>

                    <div class="form-group mb-3">
                        <label>contact</label>
                        <input type="tekt" class="form-control" name="contact">
                    </div>
                    <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
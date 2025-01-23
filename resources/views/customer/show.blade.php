@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tambahkan data ppdb</div>
                <div class="card-body">
                    <form action="{{ route('customer.update', $customer->id) }}" method="post" enctype="multipart/form-data" disabled>
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                        <label>Nama</label>
                        <input type="tekt" class="form-control" name="nama_customer" value="{{ $customer->nama_customer}}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>gender</label>
                        <div class="form-check">
                    <input type="radio" class="form-chack-input" name="gender" value="laki-laki" sytle="margin-left" value="{{ $customer->nama_customer}}" checked disabled>
                   <label class="form-check-label" for="flexRadioDefault1">
                    {{ $customer->gender}}
                   </label>
                   </div>                    </div>
                    <div class="form-group mb-3">
                        <label>contact</label>
                        <input type="tekt" class="form-control" name="contact" value="{{ $customer->contact}}" disabled>
                    </div>
                    
                    <a href="{{ route('customer.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
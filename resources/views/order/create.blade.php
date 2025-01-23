@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tambahkan data </div>
                <div class="card-body">
                    <form action="{{ route('order.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group mb-3">
                        <label>ID product</label>
                        <select name="id_product"  class="form-select" aria-label="Default select example">
                        @foreach($product as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_produk }}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="form-group mb-3">
                        <label>quantity</label>
                        <input type="tekt" class="form-control" name="quantity" >
                    </div>
                    <div class="form-group mb-3">
                        <label>order date</label>
                        <input type="date" class="form-control" name="order_date" >
                    </div>
                    <div class="form-group mb-3">
                        <label>ID customer</label>
                        <select name="id_customer"  class="form-select" aria-label="Default select example">
                        @foreach($customer as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_customer }}</option>
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
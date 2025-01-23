@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tambahkan data </div>
                <div class="card-body">
                    <form action="{{ route('order.update',$order->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                        <label>ID product</label>
                        <select name="id_product"  class="form-select" aria-label="Default select example" disabled>
                        @foreach($product as $data)
                        <option value="{{ $data->id }}"{{ $data->id == $order->id_product ? 'selected' : '' }}>{{ $data->nama_produk }}</option>
                        @endforeach
                    </select>
                    </div>
                        <div class="form-group mb-3">
                        <label>quantity</label>
                        <input type="tekt" class="form-control" name="quantity" value="{{ $order->quantity }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>order date</label>
                        <input type="tekt" class="form-control" name="order_date" value="{{ $order->order_date }}" disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>ID customer</label>
                        <select name="id_customer"  class="form-select" aria-label="Default select example" disabled>
                        @foreach($customer as $data)
                        <option value="{{ $data->id }}"{{ $data->id == $order->id_customer ? 'selected' : '' }}>{{ $data->nama_customer}}</option>
                        @endforeach
                    </select>
                    </div>
                    <a href="{{ route('order.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
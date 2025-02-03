@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('data') }}</div>

                <div class="card-body">
                  @if (session('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="close"></button>
                </div> 
                 @endif

                    <a href="{{ route ('transaksi.create') }}" class="btn btn-primary">add</a>
                <table class="table">
  <thead style="text-align : center">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">jumlah</th>
      <th scope="col">tanggal_transaksi</th>
      <th scope="col">ID Buku</th>
      <th scope="col">ID Pembeli</th>
      <th scope="col"></th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="table-group-divider" style="text-align : center">
    @php $no = 1; @endphp
    @foreach ($transaksi as $data)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $data->jumlah }}</td>
      <td>{{ $data->tanggal_transaksi }}</td>
      <td>{{ $data->buku->nama }}
      <td>{{ $data->pembeli->nama_pembeli }}</td>
      <td>
        <a href="{{ route('transaksi.edit', $data->id)}}" class="btn btn-success">Edit</a>
</td><td>
        <a href="{{ route('transaksi.show', $data->id)}}" class="btn btn-warning">Show</a>
        </td><td>

        <form action="{{ route('transaksi.destroy', $data->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
        </form>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

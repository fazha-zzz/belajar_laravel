@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('data ppdb') }}</div>

                <div class="card-body">
                  @if (session('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="close"></button>
                </div> 
                 @endif

                    <a href="{{ route ('ppdb.create') }}" class="btn btn-primary">add</a>
                <table class="table">
  <thead >
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">agama</th>
      <th scope="col">alamat</th>
      <th scope="col">telpon</th>
      <th scope="col">asal sekolah</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="table-group-divider" style="text-align : center">
    @php $no = 1; @endphp
    @foreach ($ppdb as $data)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $data->nama_lengkap }}</td>
      <td>{{ $data->jenis_kelamin }}</td>
      <td>{{ $data->agama }}</td>
      <td>{{ $data->alamat }}</td>
      <td>{{ $data->telpon }}</td>
      <td>{{ $data->asal_sekolah }}</td>
      <td>
        <div style="display:flex; gap:10px; ">
        <a href="{{ route('ppdb.edit', $data->id)}}" class="btn btn-success">Edit</a>
        <a href="{{ route('ppdb.show', $data->id)}}" class="btn btn-warning">Show</a>
        <form action="{{ route('ppdb.destroy', $data->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
        </form>
        </div>
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

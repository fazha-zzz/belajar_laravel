@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('data siswa') }}</div>

                <div class="card-body">
                  @if (session('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="close"></button>
                </div> 
                 @endif

                    <a href="{{ route ('genre.create') }}" class="btn btn-primary">add</a>
                <table class="table">
  <thead style="text-align : center">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Genre</th>
      <th scope="col"></th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="table-group-divider" style="text-align : center">
    @php $no = 1; @endphp
    @foreach ($genre as $data)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $data->genre }}</td>
      <td>
        <a href="{{ route('genre.edit', $data->id)}}" class="btn btn-success">Edit</a>
</td><td>
        <a href="{{ route('genre.show', $data->id)}}" class="btn btn-warning">Show</a>
        </td><td>

        <form action="{{ route('genre.destroy', $data->id) }}" method="POST">
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

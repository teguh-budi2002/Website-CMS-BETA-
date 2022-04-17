@extends('dashboard.partial.main')

@section('container')
<div class="d-flex flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2 text-start mr-3">Kategori saya!</h1>
  {{-- <a href="{{ url('gae-post/buat/postingan/create') }}" class="btn btn-primary mx-3">Buat Postingan</a> --}}
  <a href="{{ url('/gae-kategori/kategori/create') }}" class="btn btn-success">Buat Kategori</a>
</div>

@if(session()->has('sukses'))
<div class="alert alert-success" role="alert">
  {{ @session('sukses') }}
</div>
@endif

<div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Nama</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
          <td>{{ $category->slug }}</td>
          <td>
            <a href="{{ url('/gae-kategori/kategori/'. $category->id .'/edit') }}" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/gae-kategori/kategori/{{ $category->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0"><span data-feather="trash-2"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
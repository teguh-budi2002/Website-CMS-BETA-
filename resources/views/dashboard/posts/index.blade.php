@extends('dashboard.partial.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Postingan saya!</h1>
    <a href="{{ url('gae-post/buat/postingan/create') }}" class="btn btn-primary">Buat Postingan</a>
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
                <th scope="col">Kategori</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->judul }}</td>
          <td>{{ $post->category->name }}</td>
          <td>

            <a href="{{ url('/gae-post/buat/postingan/'. $post->slug) }}" class="badge bg-info"><span data-feather="eye"></span></a>
            <a href="{{ url('/gae-post/buat/postingan/'. $post->slug . '/edit') }}" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="{{ url('/gae-post/buat/postingan/'. $post->slug) }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Yakin mau hapus nih?')"><span data-feather="trash-2"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
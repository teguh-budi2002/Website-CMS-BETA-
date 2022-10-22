@extends('dashboard.partial.main')
@section('container')
<style>
    .tag {
        background: #ffff;
        position: relative;
        border-bottom: 10px solid #ffff;
        border-top: 10px solid #ffff;
        padding-right: 20px;
        padding-left: 20px;
        color: rgb(69, 77, 85);
        -webkit-transition: 0.4s;
    }

    .tag::after {
        content: '';
        width: 10px;
        height: 20px;
        position: absolute;
        right: -45px;
        top: -9px;
        border-bottom: solid 40px #ffff;
        border-left: solid 30px transparent;
        border-right: solid 30px transparent;
        transform: rotate(90deg);
    }

    .tag:hover {
        background: crimson;
        border-color: crimson;
        color: white;
    }

    .tag:hover::after {
        border-bottom: solid 40px crimson;
        border-left: solid 30px transparent;
        border-right: solid 30px transparent;
    }

</style>
<div class="w-full h-full">
    <div class="container mt-28 mx-auto">
        <div class="flex justify-center">
            <div class="category_list w-3/4 p-2 bg-gray-300 pb-3 rounded-md border-2 border-gray-700 mb-10">
                @if ($mess = Session::get('sukses'))
                    <div class="alert w-full bg-green-300 text-green-600 rounded p-2 text-center">
                        <p>{{ $mess }}</p>
                    </div>
                @endif
                <div class="txt_header mt-2 mb-5 text-center">
                    <p class="text-3xl text-gray-700">List Category</p>
                </div>
                <div class="btn_create text-center mb-5">
                    <a href="{{ url('/gae-kategori/kategori/create') }}" class="py-2.5 px-6 rounded bg-blue-500 text-white">Add Category</a>
                </div>
                <div class="wrapper_tags flex justify-center">
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-auto text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6 text-center">
                                        Name Category
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Image
                                    </th>
                                    <th scope="col" class="py-3 px-6 text-center">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="py-4 px-6 space-y-12">
                                        <div class="tags text-center w-48">
                                            <a href="" class="tag block">{{ $category->name }}</a>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <img src="{{ asset('storage/public/category-image/' . $category->imageCategory) }}" alt="image category" class="w-10 h-10">
                                    </td>
                                    <td class="py-4 px-6 space-x-4">
                                        <a href="{{ url('/gae-kategori/kategori/'. $category->id .'/edit') }}"
                                            class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline">Edit</a>
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                                        <form action="/gae-kategori/kategori/{{ $category->id }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" href="#"
                                            class="font-medium text-red-600 dark:text-red-500 hover:underline ">Delete</button>
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
</div>
{{-- <div class="d-flex flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2 text-start mr-3">Kategori saya!</h1>
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
                    <a href="{{ url('/gae-kategori/kategori/'. $category->id .'/edit') }}"
                        class="badge bg-warning"><span data-feather="edit"></span></a>
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
</div> --}}
@endsection

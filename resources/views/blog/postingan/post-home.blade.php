@extends('blog.index')
@section('container')
<link rel="stylesheet" href="{{ asset('/css/post-style.css') }}">
<section class="bg-gray-50 dark:bg-gray-800 overflow-hidden">
        <h1 class="mx-auto pt-5 mb-4 text-4xl font-bold leading-tight text-center text-state-700 dark:text-gray-50"
            data-aos="fade-down" style="font-family: 'Hubballi', cursive;">
            Halaman Postingan!
        </h1>

        <div class="container">
        <div class="mt-3 mb-4 bg-gray-300 rounded-lg p-2">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                  <a href="{{ url('/') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-700 dark:hover:text-white">
                    <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                    Home
                  </a>
                </li>
                <li>
                  <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-800 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:text-gray-700">Article</span>
                  </div>
                </li>
              </ol>
        </div>
    </div>
    @if ($posts->count())
   <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-4 mt-5 flex flex-wrap justify-center" id="scale-kotak">
            <div class="kotak-post rounded-t-md">
                <img src="{{ asset('storage/public/post-images/' . $post->image) }}" alt="{{ $post->image }}" class="gambar-post">
                <a href="{{ url('/post/'.$post->slug) }}" class="judul text-xl font-semibold mt-1 text-gray-600 hover:text-blue-500">{{ $post->judul }}</a>
                <p class="excerpt text-sm mt-2">{{ $post->excerpt }}</p>
            </div>
            <div class="kotak-bawah rounded-b-md">
                <p class="author"><i class="bi bi-person-check font-bold text-lg mr-2"></i>{{ $post->author }}</p>
                <p class="date-time">{{ $post->created_at->format('Y F, d') }}</p>
            </div>
        </div>
        @endforeach
    </div>
    <div class="container mb-3">
        <div class="flex justify-center mt-5 mb-5">
            {{ $posts->links('vendor.pagination.simple-tailwind') }}
        </div>
    </div>
    @else
    <div class="container">
        <hr class="dark:text-teal-500" style="font-weight: 400px">
    </div>
    <div class="text-4xl dark:text-gray-50 text-center font-bold font-sans mt-20 mb-40">
        <p class="" data-aos-duration="1000">Oops,Postingan Yang Kamu Cari Tidak Ada!</p>
    </div>>
    @endif
    @include('blog.layouts.footer')
</section>
@endsection

@extends('blog.index')
@section('container')
<link rel="stylesheet" href="{{ asset('/css/post-style.css') }}">
<section class="bg-gray-50 dark:bg-gray-800">
        <h1 class="mx-auto pt-5 mb-4 text-4xl font-bold leading-tight text-center text-state-700 dark:text-gray-50"
            data-aos="fade-down" data-aos-duration="1000" style="font-family: 'Hubballi', cursive;">
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
    <div class="col-md-12 mx-auto">
        <div class="container mt-2 rounded-lg drop-shadow-xl" data-aos="flip-up" data-aos-duration="1000">
            <div class="bg-gray-50 rounded-t-lg rounded-b-none overflow-hidden shadow-lg shadow-gray-600">
                <div class="position-absolute px-3 py-2 rounded-l-lg text-white text-xs md:text-sm px-6"
                    style="background-color: rgba(0, 0, 0, 0.7)">
                    {{ $posts[0]->category->name }}
                </div>
                <a class="no-underline text-blue-300 hover:text-blue-500"
                    href="{{ url('/post/'.$posts[0]->slug) }}">
                    @if ($posts[0]->image)
                    <img class="w-full" src="{{ asset('storage/' . $posts[0]->image) }}" id="gambar-atas" alt="{{ $posts[0]->image }}">
                    @else
                    <img class="w-full"
                        src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" alt="gambar">
                    @endif
                </a>
                <div class="w-full px-6">
                    <p class=" text-gray-600 dark:text-gray-800 text-xs md:text-sm pt-3 ">
                        Author By: {{ $posts[0]->author }}
                    </p>
                    <a class=" no-underline text-black hover:text-blue-500"
                        href="{{ url('/post/'.$posts[0]->slug) }}">
                        <p class=" text-slate-700 font-bold text-3xl dark:text-gray-800">{!! $posts[0]->judul !!}</p>
                    </a>
                    <p class="text-gray-800 dark:text-gray-800 text-start pt-2 mb-3">
                        {{-- {{ \Illuminate\Support\Str::limit(strip_tags($posts[0]->body), 200, '.') }} --}}
                        {{ $posts[0]->excerpt }}
                    </p>
                </div>
                <div class="flex items-center justify-center">
                    <button
                        class=" bg-gray-50  hover:text-blue-700 lg:mx-0 font-semibold font-sans rounded-full py-4 px-8 shadow-lg transform transition hover:scale-105 duration-300 ease-in-out">
                        <a class="no-underline text-blue-600"
                            href="{{ url('/post/'.$posts[0]->slug) }}">Read
                            More!</a>
                    </button>
                </div>
                <span class="text-gray-800 dark:text-gray-800 text-xs font-medium flex justify-center items-center py-5  dark:bg-gray-50 dark:text-gray-50">
                    <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
                    {{ $posts[0]->created_at->diffForHumans() }}
                  </span>
            </div>
            </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mt-3">
                <div class="w-auto p-2 drop-shadow-xl" data-aos="flip-down" data-aos-duration="1000">
                    <div class="flex-1 bg-gray-50 dark:bg-gray-50 rounded-t-lg  overflow-hidden shadow-lg shadow-gray-600">
                        <div class="position-absolute px-3 py-2 rounded-l-lg text-white text-xs md:text-sm px-6"
                            style="background-color: rgba(0, 0, 0, 0.7)">
                            <a class="text-white no-underline"
                                href="/post/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                        </div>
                        <a class="no-underline text-blue-300 hover:text-blue-500"
                            href="{{ url('/post/'.$post->slug) }}">
                            @if($post->image)
                            <img class="w-full" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->image }}">
                            @else
                            <img
                                src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" alt="gambar">
                            @endif
                            </a>
                        <div class="p-2 text-center">
                            <p class="text-gray-600 dark:text-gray-800 text-xs md:text-sm pt-3">
                                Author By: {{ $post->author }}
                            </p>
                            <a class=" no-underline text-black hover:text-blue-500"
                                href="{{ url('/post/'.$post->slug) }}">
                                <p class="text-slate-700 font-bold text-xl pt-2 dark:text-gray-800">{{ $post->judul }}</p>
                            </a>
                        </div>
                        <div class="flex items-center justify-center">
                            <button
                                class=" bg-gray-50 hover:text-blue-700 lg:mx-0 font-semibold font-sans rounded-full py-4 px-8 shadow-lg transform transition hover:scale-105 duration-300 ease-in-out">
                                <a class="no-underline text-blue-600"
                                    href="{{ url('/post/'.$post->slug) }}">Read
                                    More!</a>
                            </button>
                        </div>
                        <span class="text-gray-800 text-xs font-medium flex justify-center items-center py-5 dark:bg-gray-50 dark:text-gray-800">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
                            {{ $post->created_at->diffForHumans() }}
                          </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
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
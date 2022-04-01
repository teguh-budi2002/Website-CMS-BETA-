@extends('blog.index')
@section('container')
<section class="bg-gray-100 dark:bg-gray-800">
<div class="container pt-10 mx-auto">
    <div class="container text-center pt">
      <span class="font-bold text-4xl dark:text-gray-50" style="font-family: 'Hubballi', cursive;">Postingan Pada: {{ $category }}</span>
    </div>
    <div class="mt-3 bg-gray-300 rounded-lg p-2">
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
                <a href="{{ url('/categories') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-700 dark:hover:text-white">Category</a>
              </div>
            </li>
            <li aria-current="page">
              <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-800 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:text-gray-700">{{ $category }}</span>
              </div>
            </li>
          </ol>
    </div>

        <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-4">
                <div
                    class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mt-4">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                            alt="gambar">
                    </a>
                    <div class="p-3">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-slate-800">
                            {{ $post->judul }}</h5>
                        <div class="flex items-center justify-start mt-2">
                            <a href="{{ url('/post/'.$post->slug) }}"
                                class="no-underline inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-700 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Ayo baca!
                                <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col mb-3">
        <div class="flex justify-center mt-5 mb-5">
            {{ $posts->links('vendor.pagination.simple-tailwind') }}
        </div>
    </div>
    @include('blog.layouts.footer')
</section>
@endsection
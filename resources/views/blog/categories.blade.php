@extends('blog.index')
@section('container')
<section class="bg-gray-100 dark:bg-gray-800 w-full h-full">
    <div class="wrapper">
        <div class="text-center pt-10">
            <span class="font-semibold text-4xl text-gray-600 dark:text-gray-50">Postingan Pada: {{ $category }}</span>
        </div>
        <div class="flex justify-center">
            <div class="w-10/12 mt-8 bg-gray-300 rounded-lg p-2">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ url('/') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-700 dark:hover:text-white">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-800 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <a href="{{ url('/categories') }}"
                                class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-700 dark:hover:text-white">Kategori</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-800 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span
                                class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:text-gray-700">{{ $category }}</span>
                        </div>
                    </li>
                </ol>
            </div>
        </div>

        @if ($postCategories->count())
        <div class="grid lg:grid-cols-3 grid-cols-1 gap-5 mx-8 mt-10">
            @foreach ($postCategories as $post)
            <div class="flex justify-center">
                <div class="max-w-full bg-white rounded-lg shadow-md shadow-gray-300 mt-4">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('storage/public/post-images/' . $post->image) }}"
                            alt="gambar_post_category">
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
        @else
        <div class="flex justify-center">
            <div class="mt-28">
                <div class="txt-info">
                    <p class="text-4xl text-gray-600 dark:text-gray-50 text-center font-semibold">Ooppss, Belum Ada Postingan pada Kategori Ini</p>
                </div>
                <div class="btn-back text-center mt-10 mb-48">
                    <a href="{{ url('/categories') }}" class="bg-green-500 rounded text-white py-2.5 px-6">Kembali</a>
                </div>
            </div>
        </div>
        @endif
    </div>
    <div class="flex justify-center mt-5 pb-10">
        {{ $postCategories->links('vendor.pagination.simple-tailwind') }}
    </div>
</section>
@endsection

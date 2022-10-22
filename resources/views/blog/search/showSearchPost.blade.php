@extends('blog.index')
@section('container')
<section class="bg-gray-50 dark:bg-gray-800 w-full h-full overflow-hidden">
    <h1 class="pt-5 mb-4 text-4xl font-semibold text-center text-gray-600 dark:text-gray-50">
        {{ $searching }}
    </h1>

    <div class="bread_crumbs_wrapper w-3/4 mx-auto">
        <div class="mt-3 mb-4 bg-gray-300 rounded-lg p-2">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ url('/') }}"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-700 dark:hover:text-white">
                        <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                            </path>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-800 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:text-gray-700">Article</span>
                    </div>
                </li>
            </ol>
        </div>
    </div>
    @if ($posts->count())
    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1">
        @foreach ($posts as $post)
        <div class="flex justify-center items-center mx-5 my-3">
            <div class="relative min-w-full h-[480px] bg-white shadow-md shadow-gray-400 dark:shadow-gray-300 rounded-t-md p-2">
                <div class="img_header">
                    <img src="{{ asset('storage/public/post-images/' . $post->image) }}" alt="{{ $post->image }}">
                </div>
                <hr class="border border-gray-400 mx-3 mt-5 mb-4">
                <div class="title_txt mt-3 mb-3">
                    <a href="{{ url('/post/'.$post->slug) }}"
                        class="text-xl font-semibold text-gray-600 hover:text-blue-500">{{ $post->judul }}</a>
                </div>
                <div class="description_txt">
                    <p class="text-sm">{{ $post->excerpt }}</p>
                </div>
                <div class="created_at mb-3">
                    <div class="right_item absolute bottom-3 right-3 text-sm font-semibold text-gray-600">
                        <p class="date-time">{{ $post->created_at->format('Y F, d') }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="wrapper w-full h-screen flex items-center justify-center">
        <div class="text-4xl text-gray-500 dark:text-gray-50 text-center font-semibold mt-8">
            <p class="" data-aos-duration="1000">Woopss, Postingan Yang Kamu Cari Tidak Ada!</p>
        </div>
    </div>
    @endif
</section>
@endsection

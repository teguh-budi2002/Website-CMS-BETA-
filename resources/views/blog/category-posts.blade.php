@extends('blog.index')
@section('container')
<section class="bg-gray-100 dark:bg-gray-800">
    <div class="container p-4">
      <header>
        <p class="text-4xl font-sans font-semibold text-center text-slate-800 dark:text-gray-50 mt-3" style="font-family: 'Hubballi', cursive;">Artikel Berdasarkan: Kategori</p>

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
                    <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:text-gray-500">Category</span>
                  </div>
                </li>
            </ol>
        </div>

      </header>
        <div class="row">
            @foreach ($categories as $category)
                <div class="card rounded-t-lg p-2 mt-4 mb-5">
                    <div class="card-image">
                        <img class="w-full" src="https://source.unsplash.com/1200x400">
                        <div class="mt-3">
                        <span class="card-title text-2xl text-gray-800 ">{{ $category->name }}</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-start mt-2">
                      <a href="/post/categories/{{ $category->slug }}"
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
            @endforeach
        </div>
    </div>
    @include('blog.layouts.footer')
</section>
@endsection
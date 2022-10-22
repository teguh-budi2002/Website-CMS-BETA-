@extends('blog.index')
@section('container')
<section class="bg-gray-100 dark:bg-gray-800 w-full h-full">
    <div class="wrapper">
        <div class="txt_header">
            <p class="text-4xl font-semibold text-center text-gray-700 dark:text-gray-50 pt-8 mb-3">Artikel Berdasarkan:
                Kategori</p>
        </div>
        <div class="w-full flex justify-center">
            <div class="w-10/12 mt-3 bg-gray-300 rounded-lg p-2">
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
                            <span
                                class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:text-gray-500">Kategori</span>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1">
            @foreach ($categories as $category)
            <div class="wrapper flex justify-center items-center mb-10">
              <div class="wrapper-content mt-5 space-y-10">
                <div class="img_header flex justify-center">
                  @if ($category->imageCategory)
                  <a href="{{ url('/categories/'. $category->slug) }}"><img class="w-32 h-32 rounded-full"
                          id="gambar-thumb" style="box-shadow: 3px 3px 2px rgba(0,0,0,0.5);"
                          src="{{ asset('storage/public/category-image/' . $category->imageCategory) }}"
                          alt="{{ $category->imageCategory }}"></a>
                  @else
                  <img class="w-full" src="https://source.unsplash.com/1200x400?{{ $category->name }}" alt="gambar_category">
                  @endif
                </div>
                  <div class="text-center">
                      <a href="{{ url('/categories/'. $category->slug) }}"><span
                              class="card-title text-2xl text-gray-700 hover:text-gray-500 dark:text-gray-50 font-sans font-semibold">{{ $category->name }}</span></a>
                  </div>
              </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

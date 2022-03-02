@include('layouts.nav')



<section class="bg-gradient-to-r from-green-600 to-blue-500 border-b py-20 mt-15">
<div class="container mx-auto flex flex-wrap pt-4 pb-12">
    <h1 class="w-full my-2 text-5xl font-semibold font-serif leading-tight text-center text-gray-800" data-aos="fade-down" data-aos-duration="1000">
       Postingan Pada {{ $category }}
    </h1>
    <div class="w-full mb-4">
      <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
    </div>

    @foreach ($posts as $post)
    <div class="w-full md:w-1/3 p-4 flex flex-col flex-grow flex-shrink" data-aos="zoom-in-up" data-aos-duration="1000">
      <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
        <a href="#" class="flex flex-wrap no-underline hover:no-underline"></a>
          <p class="w-full text-gray-600 text-xs md:text-sm px-6 mt-2">
            Author By: <a class="no-underline text-blue-300 hover:text-blue-500" href="">{{ $post->author }}</a>
          </p>
          <p class="w-full text-gray-600 text-xs md:text-sm px-6 mt-1">
            Category: <a class="no-underline text-blue-300 hover:text-blue-500" href="">{{ $category }}</a>
          </p>
          <img src="{{ asset('/img/html.webp') }}" alt="gambarhtml">
          <div class="w-full font-bold text-xl text-gray-800 px-6">
            <a class=" no-underline text-black hover:text-blue-500" href="">{!! $category !!}</a>
          </div>
          <p class="truncate text-gray-800 text-base px-6 mb-10">
            {!! $post->body !!}
          </p>
        </a>
      </div>
      <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
        <div class="flex items-center justify-start">
          <button class="mx-auto bg-gray-400 lg:mx-0 hover:bg-gray-200 gradient text-rose-900 font-bold rounded-full py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Go!
          </button>
        </div>
      </div>
    </div>
    @endforeach

  </section>
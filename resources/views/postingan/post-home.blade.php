<section class="bg-gray-50">
    @include('layouts.nav')
    <div class="mx-auto mt-5">
        <h1 class="w-full mb-3 text-4xl font-semibold font-sans leading-tight text-center text-state-700"
            data-aos="fade-down" data-aos-duration="1000">
            Halaman Postingan
        </h1>
    </div>
    {{-- <div class="row justify-center">
        <div class="col-md-8">
            <form action="post-home" class="flex flex-nowrap mt-3" data-aos="zoom-in" data-aos-duration="1000">
            <input class="form-control me-2 rounded-md box-border block" type="text" name="search"
                value="{{ request('search') }}" placeholder="Cari Postingan....">
    <button
        class="rounded-md px-10 bg-gray-50 outline outline-2 outline-blue-500 transform transition hover:scale-105 duration-300 ease-in-out"
        type="submit">Search</button>
    </form>
    </div>
    </div> --}}

    @if ($posts->count())
    <div class="container rounded-lg drop-shadow-xl" data-aos="flip-up" data-aos-duration="1000">
        <div class="bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <div class="position-absolute px-3 py-2 text-white text-xs md:text-sm px-6"
                style="background-color: rgba(0, 0, 0, 0.7)">
                {{ $posts[0]->category->name }}
            </div>
            <a class="no-underline text-blue-300 hover:text-blue-500"
                href="{{ url('halaman-post/post/view/'.$posts[0]->category->slug) }}"><img class=""
                    src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }} " alt="gambar"></a>
            <div class="w-full font-bold text-xl text-gray-800 px-6">
                <p class=" text-gray-600 text-xs md:text-sm pt-3 ">
                    Author By: {{ $posts[0]->author }}
                </p>
                <a class=" no-underline text-black hover:text-blue-500"
                    href="{{ url('halaman-post/post/view/'.$posts[0]->category->slug) }}">
                    <p class=" text-slate-700">{!! $posts[0]->judul !!}</p>
                </a>
            </div>
            <p class="truncate text-gray-800 text-base px-6 mb-10">
                {!! $posts[0]->body !!}
            </p>
            </a>
            <div class="flex items-center justify-center">
                <button
                    class=" bg-gray-50  hover:text-blue-700 lg:mx-0 font-semibold font-sans rounded-full py-4 px-8 shadow-lg transform transition hover:scale-105 duration-300 ease-in-out">
                    <a class="no-underline text-blue-600"
                        href="{{ url('halaman-post/post/view/'.$posts[0]->category->slug) }}">Read
                        More!</a>
                </button>
            </div>
            <p class="text-gray-600 text-xs md:text-sm text-center pt-5">
                Created At: {{ $posts[0]->created_at->diffForHumans() }}
            </p>
        </div>
        </div>
    </div>

    <div class="container flex-none mt-5">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4">
                <div class="w-auto p-2 drop-shadow-xl" data-aos="flip-down" data-aos-duration="1000">
                    <div class="flex-1 bg-white  overflow-hidden shadow">
                        <div class="position-absolute px-3 py-2 text-white text-xs md:text-sm px-6"
                            style="background-color: rgba(0, 0, 0, 0.7)">
                            <a class="text-white no-underline"
                                href="/post/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                        </div>
                        <a class="no-underline text-blue-300 hover:text-blue-500"
                            href="{{ url('halaman-post/post/view/'.$post->category->slug) }}"><img class=""
                                src="https://source.unsplash.com/500x400?{{ $post->category->name }}" alt="gambar"></a>
                        <div class=" px-10 font-bold text-xl text-gray-800">
                            <p class="text-gray-600 text-xs md:text-sm pt-3">
                                Author By: {{ $post->author }}
                            </p>
                            <a class=" no-underline text-black hover:text-blue-500"
                                href="{{ url('halaman-post/post/view/'.$post->category->slug) }}">
                                <p class="text-slate-700 ">{!! $post->judul !!}</p>
                            </a>
                        </div>
                        <div class="flex items-center justify-center">
                            <button
                                class=" bg-gray-50  hover:text-blue-700 lg:mx-0 font-semibold font-sans rounded-full py-4 px-8 shadow-lg transform transition hover:scale-105 duration-300 ease-in-out">
                                <a class="no-underline text-blue-600"
                                    href="{{ url('halaman-post/post/view/'.$post->category->slug) }}">Read
                                    More!</a>
                            </button>
                        </div>
                        <p class="text-gray-600 text-xs md:text-sm text-center pt-5">
                            Created At: {{ $post->created_at->diffForHumans() }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="col mb-3">
        <div class="flex justify-center mt-5">
            {{ $posts->links() }}
        </div>
    </div>
    @else>
    <div class="container">
        <hr style="font-weight: 400px">
    </div>
    <div class="text-4xl text-center font-bold font-sans ">
        <p class="" data-aos-duration="1000">Oops,Postingan Yang Kamu Cari Tidak Ada!</p>
    </div>>
    @endif
</section>
@include('layouts.footer')

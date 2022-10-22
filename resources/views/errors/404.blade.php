@extends('blog.index')
@section('container')
<div class="w-full lg:h-screen h-full">
    <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 mx-5">
        <div class="flex justify-center mt-20">
            <div class="img_404">
                <img class="notfound" src="{{ asset('/img/404notfound.png') }}" alt="http://www.freepik.com">
            </div>
        </div>
        <div class="flex justify-center items-center lg:mt-20 mt-5 lg:mb-0 mb-10">
            <div class="wrapper text-center">
                <p class="text-5xl leading-relaxed font-semibold text-gray-600">Whooops, Sepertinya halaman yang kamu cari tidak ditemukan!</p>
                <a href="{{ url('/') }}" class="py-2.5 px-3 bg-green-500  hover:bg-green-600 rounded-md text-gray-50 hover:text-gray-100">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection

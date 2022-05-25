@extends('blog.index')
@section('container')
<style>
    .notfound {
        margin-left: 50px;
        max-width: 100%;
        max-height: 600px;
    }
    #button-kembali{
        position: absolute;
        left: 46%;
        top: 75%;
    }

    @media screen and (max-width: 800px){
        .tulisan{
            display: none;
        }
        #button-kembali{
        position: absolute;
        left: 38%;
        top: 96%;
        margin-top: 8px;
        }
        .notfound {
        margin-left: 20px;
        max-width: 100%;
        max-height: 600px;
    }
    }
</style>
<section class="relative mt-8 mb-5">
    <div class="row">
        <div class="col flex items-center flex-col md:flex-row space-x-7 overflow-hidden" id="parent-el">
            <img class="notfound" src="{{ asset('/img/404notfound.png') }}" alt="http://www.freepik.com">
            <p class="text-5xl leading-relaxed tulisan">Whooops, Sepertinya halaman yang kamu cari tidak ditemukan!</p>
            <a href="{{ url('/') }}" class="no-underline text-gray-50 hover:text-gray-100"><button class="py-2.5 px-3 bg-green-500  hover:bg-green-600 rounded-sm" id="button-kembali">Kembali?</button></a>
        </div>
    </div>
</section>
@include('blog.layouts.footer')
@endsection

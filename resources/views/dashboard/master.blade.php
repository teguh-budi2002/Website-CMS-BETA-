@extends('dashboard.partial.main')
@section('container')
<section class="w-full h-full text-white">
    <div class="flex justify-start">
        <div class="mt-28 mx-20">
            <p>Hello, {{ auth()->user()->username }} Selamat datang pada halaman dashboard</p>
        </div>
    </div>
</section>
@endsection

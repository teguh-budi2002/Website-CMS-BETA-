@extends('blog.index')
@section('container')
    <section class="w-full h-screen flex justify-center items-center bg-gray-100 dark:bg-gray-700">
        <div class="wrapper text-center">
            <p class="text-4xl text-red-600 mb-5">Too Many Attempt Request</p>
            <a href="{{ url('/') }}" class="py-2.5 px-6 rounded bg-red-300 text-red-600">Back</a>
        </div>
    </section>
@endsection
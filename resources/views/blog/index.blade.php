@extends('layouts.master')


<section>

    @include('sweetalert::alert')
    @include('layouts.nav')
    {{-- Auth Message --}}
    @auth

    <div class="rightJQ li bg-gradient-to-r from-slate-900 via-slate-800 to-slate-900 text-white">
        <span class="text-lg font-sans font-medium">Hello, {{ auth()->user()->username }} Welcome and Enjoy Your Study!</span>
    </div>

    @endauth
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    {{-- End Message --}}
</section>

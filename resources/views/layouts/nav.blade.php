<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GUH | {{ $title ?? 'Home' }}</title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/css-bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('/css/nav-style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Balsamiq+Sans&family=Montserrat&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-green-700">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <span class="text-3xl font-bold" style="font-family: 'Alex Brush', cursive;">Guh Coding</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                {{-- <span class="navbar-toggler-icon"></span> --}}
                <span><i class="fas fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('halaman-post')? 'active' : '' }} font-medium text-xl no-underline"
                            href="{{ url('/halaman-post') }}">
                            <span style="font-family: 'Balsamiq Sans', cursive;">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('post/categories')? 'active' : '' }} font-medium text-xl no-underline"
                            href="{{ url('post/categories') }}">
                            <span style="font-family: 'Balsamiq Sans', cursive;">Category</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('profile')? 'active' : '' }} font-medium text-xl no-underline"
                            href="{{ url('/profile') }}">
                            <span style="font-family: 'Balsamiq Sans', cursive;">About</span>
                        </a>
                    </li>
                </ul>

                <form action="{{ url('/halaman-post') }}" class="flex my-2">
                    {{ csrf_field() }}
                    <div class="kotak-modal hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 flex justify-center items-center md:inset-0 h-modal sm:h-full"
                        id="large-modal">
                        <div class="relative px-4 w-full max-w-4xl h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-slate-700 rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center p-4 rounded-t border-b dark:border-gray-600">
                                    <h3 class="text-xl font-medium text-gray-50 dark:text-white">
                                        Artikel apa yang ingin kamu cari?
                                    </h3>
                                    <button type="button" id="tutup-bar"
                                        class="text-gray-100 bg-transparent hover:bg-gray-200 hover:text-gray-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="large-modal">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-6">
                                    <input class="p-2 w-full rounded-pill placeholder:text-slate-700" type="search"
                                        placeholder="Search...." name="search" value="{{ request('search') }}">
                                </div>
                                <!-- Modal footer -->
                                <div
                                    class="flex justify-center items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                    <button data-modal-toggle="large-modal" type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bungkus-tombol">
                        <span
                            class="flex items-center justify-center p-2 bg-green-500 h-10 w-10 hover:bg-green-700 rounded-full cursor-pointer text-white"
                            id="tombol"><i class="bi bi-search"></i></span>
                    </div>
                </form>
            </div>
        </div>
    </nav>

</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>

<script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

<script>
    const show = document.querySelector('.kotak-modal');
    const klik = document.querySelector('#tombol');
    const tutup = document.querySelector('#tutup-bar');


    klik.addEventListener('click', function () {
        show.classList.toggle('hidden');
    })

    tutup.addEventListener('click', function () {
        show.classList.add('hidden');
    })

</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        once: true,
    });

</script>

</html>

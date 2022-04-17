<link rel="stylesheet" href="{{ asset('/css/nav-style.css') }}">
    <nav
        class="navbar navbar-expand-lg navbar-dark bg-gray-50 dark:bg-gray-800 shadow-md shadow-gray-500 dark:border-b-2 dark:border-teal-500">
        <div class="container">
        <div class="flex justify-center items-center">
                {{-- <img src="{{ asset('/img/logo-web-2.png') }}" class="w-16 h-16 mr-3" alt="logo-website"> --}}
            <a class="navbar-brand" href="{{ url('/') }}">
                <div class="text-4xl text-gray-900 dark:text-white" id="logo-web" title="guhcoding">guhcoding</div>
            </a>
        </div>
            <button class="pb-3" id="button-hamburger" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Toggle navigation">
                <span><i class="fas fa-bars text-gray-900 dark:text-white font-bold" id="icon-burger"></i></span>
            </button>

            <div class="collapse navbar-collapse selektor" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('halaman-post')? 'active' : '' }} font-medium text-xl no-underline"
                            href="{{ url('/halaman-post') }}">
                            <span
                                class="text-gray-400 hover:text-gray-300 dark:text-teal-400 dark:hover:text-teal-200 p-2"
                                style="font-family: 'Balsamiq Sans', cursive;">ARTIKEL</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('categories*')? 'active' : '' }} font-medium text-xl no-underline"
                            href="{{ url('/categories') }}">
                            <span
                                class="text-gray-400 hover:text-gray-300 dark:text-teal-400 dark:hover:text-teal-200 p-2"
                                style="font-family: 'Balsamiq Sans', cursive;">KATEGORI</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('profile')? 'active' : '' }} font-medium text-xl no-underline"
                            href="{{ url('/profile') }}">
                            <span
                                class="text-gray-400 hover:text-gray-300 dark:text-teal-400 dark:hover:text-teal-200 p-2"
                                style="font-family: 'Balsamiq Sans', cursive;">AUTHOR</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bungkus-tombol">
                <span
                    class="flex items-center justify-center p-2 bg-green-500 dark:bg-slate-500 dark:hover:bg-slate-700 h-10 w-10 hover:bg-green-700 rounded-full cursor-pointer text-white"
                    id="tombol-cari"><i class="bi bi-search"></i></span>
            </div>
            <div class="px-2">
                <span
                    class="flex items-center justify-center p-2 bg-gray-200 hover:bg-gray-400 h-10 w-10 rounded-full cursor-pointer text-white"
                    id="tombol-gelap">
                    <i class="bi bi-moon-stars cursor-pointer text-slate-800 dark:text-slate-800" id="icon-switch"></i>
                </span>
            </div>
        </div>
        <form action="{{ url('/halaman-post') }}" class="flex my-2">
            {{ csrf_field() }}
            <div class="kotak-modal hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 flex justify-center items-center md:inset-0 h-modal sm:h-full"
                id="large-modal">
                <div class="relative px-4 w-full max-w-4xl h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-gray-50 rounded-lg shadow dark:bg-gray-500">
                        <!-- Modal header -->
                        <div class="flex items-center p-2 rounded-t border-b dark:border-gray-700">
                            <h3 class="text-xl ml-2 mt-2 font-medium text-gray-800 dark:text-white">
                                {{-- <i class="bi bi-search font-bold">  --}}
                                SEARCH
                                {{-- </i> --}}
                            </h3>
                            <button type="button" id="tutup-bar"
                                class="text-gray-800 dark:text-gray-50 bg-transparent hover:bg-gray-200 hover:text-gray-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-200 dark:hover:text-gray-400"
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
                        <div class="p-4">
                            <div class="flex flex-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mr-2 text-slate-800 dark:text-white " fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                                <input type="text" name="search" class="kolom-cari placeholder:text-gray-500 dark:border-gray-50"
                                    placeholder="Mau cari postingan apa?" value="{{ request('search') }}">
                            </div>
                            <div class="flex justify-center items-center pt-2 space-x-2 rounded-b">
                                <button data-modal-toggle="large-modal" type="submit"
                                    class="text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </nav>
    <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            // switch icon dark-mode
            $('#tombol-gelap').click(function () {
                $('#icon-switch').toggleClass("bi bi-sun");
            })
            // animasi kotak modal
            $('#tombol-cari').click(function () {
                $('.kotak-modal').addClass('modalAnimasi')
            })
            $('#tutup-bar').click(function(){
                $('.kotak-modal').removeClass('modalAnimasi')
            })
            // animasi blur
            $('#tombol-cari').click(function () {
                $('.container').addClass('modalBlur')
            });
            $('#tutup-bar').click(function(){
                $('.container').removeClass('modalBlur')
            })

        })

    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <script>
        const show = document.querySelector('.kotak-modal');
        const klik = document.querySelector('#tombol-cari');
        const tutup = document.querySelector('#tutup-bar');

        klik.addEventListener('click', function () {
            show.classList.toggle('hidden');
        })

        tutup.addEventListener('click', function () {
            show.classList.add('hidden');
        })

        // Dark Mode Set Up
        const html = document.querySelector('html');
        const tombolMalam = document.querySelector('#tombol-gelap');
        const iconSwitch = document.querySelector('#icon-switch');
        let darkMode = false;

        // default dari system
        if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
            darkMode = true;
        }

        // setting darkmode
        if (localStorage.getItem('theme') === 'dark') {
            darkMode = true;
        } else if (localStorage.getItem('theme') === 'light') {
            darkMode = false;
        }

        if (darkMode) {
            html.classList.toggle('dark');
        }

        document.addEventListener('DOMContentLoaded', () => {

            tombolMalam.addEventListener('click', () => {
                html.classList.toggle('dark');
                localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' :
                    'light');
            });
        });

    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });

    </script>

<link rel="stylesheet" href="{{ asset('/css/nav-style.css') }}">
<div class="bungkus">
    <div class="sidebar bg-gray-50 dark:bg-gray-500">
        <div class="flex justify-center items-center space-x-5 mt-5">
            <a class="logo-nav" href="" title="GuhCoding">GuhCoding</a>
        </div>
        <ul class="menu-item space-y-5">
            <li class="daftar-item">
                <a class="item border-b-2 dark:text-white border-b-green-500" href="{{ url('/') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                  </svg>
                  Home</a>
            </li>
            <li class="daftar-item">
                <a class="item border-b-2 dark:text-white border-b-green-500" href="{{ url('/halaman-post') }}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                  </svg>
                  </i>Artikel</a>
            </li>
            <li class="daftar-item">
                <a class="item border-b-2 dark:text-white border-b-green-500" href="{{ url('/categories') }}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                  </svg>
                  Kategori</a>
            </li>
            <li class="daftar-item">
                <a class="item border-b-2 dark:text-white border-b-green-500" href="{{ url('/profile') }}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                  </i>Author</a>
            </li>
        </ul>

        {{-- tombol open search --}}
        <div class="bungkus-tombol flex justify-center items-center rounded-r-full bg-gray-50 dark:bg-gray-500">
            <span
                class="flex items-center justify-center p-2 bg-green-500 dark:bg-gray-50 dark:hover:bg-gray-400 h-10 w-10 hover:bg-green-700 rounded-full cursor-pointer text-white"
                id="tombol-cari">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 dark:text-slate-800">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                  </svg>
                </span>
        </div>
        {{-- tombol open sidebar --}}
        <div class="h-16 w-16 flex justify-center items-center rounded-r-full bg-gray-50 dark:bg-gray-500 akal">
            <div class="tombol-side dark:bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white/100 dark:text-black transform -rotate-90">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                  </svg>
            </div>
        </div>
        <div class="flex justify-center">
            <span class="label-mode text-xl dark:text-white"></span>
            <div class="gelap-mode">
                <label id="dark-mode-label" for="ganti">
                    <input type="checkbox" id="ganti">
                    <span class="slide"></span>
                </label>
            </div>
        </div>
        <div class="flex items-center switch-icon dark:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 icon-bulan">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 icon-sun">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
            </svg>
        </div>

        {{-- modal --}}
        <form action="{{ url('/search') }}" class="flex my-2">
            <div class="kotak-modal hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 md:inset-72 h-modal sm:h-full"
                id="large-modal">
                <div class="relative px-4 w-full max-w-4xl h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white/100 rounded-lg shadow dark:bg-gray-500">
                        <!-- Modal header -->
                        <div class="flex items-center p-2 rounded-t border-b dark:border-gray-700">
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
                                <input type="text" name="search" class="kolom-cari placeholder:text-gray-500"
                                    placeholder="Mau cari postingan apa?" value="{{ request('search') }}">
                            </div>
                        </div>
                        <div class="flex justify-center items-center  space-x-2 rounded-b">
                            <button data-modal-toggle="large-modal" type="submit"
                                class="mb-3 text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="{{ asset('/js/darkmode.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="{{ asset('/js/navbar.js') }}"></script>

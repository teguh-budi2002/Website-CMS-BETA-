<link rel="stylesheet" href="{{ asset('/css/nav-style.css') }}">
   <div class="bungkus">
    <div class="sidebar bg-gray-50 dark:bg-gray-500">
            <div class="flex justify-center items-center space-x-5 mt-5">
                <a class="logo-nav" href="" title="GuhCoding">GuhCoding</a>
                {{-- <i class="bi bi-x-lg tombol-x "></i> --}}
            </div>
            <ul class="menu-item space-y-5">
                <li class="daftar-item">
                  <a class="item border-b-2 dark:text-white border-b-green-500" href="{{ url('/') }}"><i class="bi bi-house-door font-bold text-lg mr-2"></i>Home</a>
                </li>
                <li class="daftar-item">
                  <a class="item border-b-2 dark:text-white border-b-green-500" href="{{ url('/halaman-post') }}"><i class="bi bi-book font-bold text-lg mr-2"></i>Artikel</a>
                </li>
                <li class="daftar-item">
                   <a class="item border-b-2 dark:text-white border-b-green-500" href="{{ url('/categories') }}"><i class="bi bi-list-task font-bold text-lg mr-2"></i>Kategori</a>
                </li>
                <li class="daftar-item">
                   <a class="item border-b-2 dark:text-white border-b-green-500" href="{{ url('/profile') }}"><i class="bi bi-person-check font-bold text-lg mr-2"></i>Author</a>
                </li>
            </ul>

        {{-- tombol open search --}}
        <div class="bungkus-tombol flex justify-center items-center rounded-r-full bg-gray-50 dark:bg-gray-500">
            <span
                class="flex items-center justify-center p-2 bg-green-500 dark:bg-gray-200 dark:hover:bg-gray-400 h-10 w-10 hover:bg-green-700 rounded-full cursor-pointer text-white"
                id="tombol-cari"><i class="bi bi-search dark:text-slate-800"></i></span>
        </div>
        {{-- tombol open sidebar --}}
        <div class="h-16 w-16 flex justify-center items-center rounded-r-full bg-gray-50 dark:bg-gray-500 akal">
            <div class="tombol-side dark:bg-white">
                <i class="bi bi-caret-right-fill text-gray-50 dark:text-black"></i>
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
            <span><i class="bi bi-moon-stars icon-bulan"></i></i></span>
            <span><i class="bi bi-brightness-high icon-sun"></i></span>
        </div>

        {{-- modal --}}
        <form action="{{ url('/halaman-post') }}" class="flex my-2">
            {{ csrf_field() }}
            <div class="kotak-modal hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 flex justify-center items-center md:inset-0 h-modal sm:h-full"
                id="large-modal">
                <div class="relative px-4 w-full max-w-4xl h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-gray-50 rounded-lg shadow dark:bg-gray-500">
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
<script>
    sideTombol = document.querySelector('.tombol-side');
    sidebar = document.querySelector('.sidebar');
    menuItem = document.querySelector('.menu-item');
    logoNav = document.querySelector('.logo-nav');
    tombolGelap = document.querySelector('.gelap-mode');
    switchIcon = document.querySelector('.switch-icon');
    const label = document.querySelector(".label-mode");
    // sidebar open
    sideTombol.addEventListener('click', function () {
        sidebar.classList.toggle('show');
        sideTombol.classList.toggle('muter');
        menuItem.classList.toggle('menu-toggle');
        logoNav.classList.toggle('logo-toggle');
        tombolGelap.classList.toggle('tombol-dark');
        switchIcon.classList.toggle('open-switch');
        label.classList.toggle('open-label');
    });

//   setting darkmode
  const darkMode = () => {
  const body = document.querySelector("html");
  const systemDarkMode = window.matchMedia("(prefers-color-scheme: dark)");
  const checkbox = document.querySelector("#ganti");
  let theme = window.localStorage.getItem("theme");
  let preference;
  const findSystemPreference = () => {
    if (systemDarkMode.matches) {
      preference = "dark";
    } else {
      preference = "light";
    }
  };
  const setUserPreference = e => {
    console.log(e.target);
    if (e.target.checked == true) {
      preference = "dark";
      window.localStorage.setItem("theme", "dark");
    } else if (e.target.checked == false) {
      preference = "light";
      window.localStorage.setItem("theme", "light");
    }
    setTheme(preference);
  };
  const setTheme = pref => {
    if (pref === "dark") {
      checkbox.checked = true;
      label.textContent = "Dark Mode";
      body.classList.add("dark");
    } else {
      body.classList.remove("dark");
      label.textContent = "Light Mode";
      checkbox.checked = false;
    }
  };
  const loadInitialState = () => {
    if (theme === "dark") {
      checkbox.checked = true;
      label.textContent = "Dark Mode";
      body.classList.add("dark");
    } else {
      body.classList.remove("dark");
      label.textContent = "Light Mode";
      checkbox.checked = false;
    }
  };
  checkbox.addEventListener("click", setUserPreference);
  window.addEventListener("DOMContentLoaded", findSystemPreference);
  window.addEventListener("DOMContentLoaded", loadInitialState);
};
darkMode();
</script>
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
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });

    </script>

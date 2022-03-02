<section>
    <link rel="stylesheet" href="{{ asset('css/master-style.css') }}">
        <div class="bg-gradient-to-r from-green-700 via-green-500 to-green-700 ">
            <!--Hero-->
            <div class="pt-10">
                <div class="container relative px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                    <!--Left Col-->
                    <div class="kata flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">

                        <h1 class="my-4 text-5xl font-bold leading-tight font-mono text-slate-800">

                        </h1>
                        <button
                            class="mx-auto lg:mx-0 bg-gray-50 hover:bg-gray-100 font-bold rounded-full my-6 py-4 px-8  transform transition hover:scale-105 duration-300 ease-in-out">
                            <a class="no-underline text-blue-600 hover:text-blue-400" href="{{ url('/halaman-post') }}">Go
                                To Post!</a>
                        </button>
                    </div>
                    <!--Right Col-->
                    <div class="logonih w-full md:w-3/5 py-6">
                        <img class="w-full md:w-2/4 mx-auto" src="{{ asset('img/logo_coding.png') }}"
                            alt="https://www.freepik.com/vectors/technology" />
                    </div>
                </div>
            </div>
        </div>

            {{-- Slidshow --}}
          <div class="container relative">
          <div class="panah-bawah animate-bounce">
              <img src="{{ asset('/img/down-arrow.png') }}" alt="https://www.flaticon.com/free-icons/arrow">
          </div>
          <div class="kotak"></div>
            <div class="row slide-show">
                <div class="col-md-11 mt-3 mb-5  h-auto mx-auto">
                    <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
                        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                          <button
                            type="button"
                            data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="0"
                            class="active"
                            aria-current="true"
                            aria-label="Slide 1"
                          ></button>
                          <button
                            type="button"
                            data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="1"
                            aria-label="Slide 2"
                          ></button>
                          <button
                            type="button"
                            data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="2"
                            aria-label="Slide 3"
                          ></button>
                        </div>
                        <div class="carousel-inner relative w-full overflow-hidden">
                          <div class="carousel-item active relative float-left w-full">
                            <img
                              src="{{ asset('/img/LOGO-SLIDE.png') }}"
                              class="block w-full rounded-lg h-4/5  min-h-max"
                              alt="..."
                            />
                            <div class="carousel-caption md:block absolute text-center">
                              <h5 class="text-xl">First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item relative float-left w-full">
                            <img
                              src="{{ asset('/img/LOGO-SLIDE2.png') }}"
                              class="block w-full rounded-lg h-4/5 min-h-max"
                              alt="..."
                            />
                            <div class="carousel-caption md:block absolute text-center">
                              <h5 class="text-xl">Second slide label</h5>
                              <p>Some representative placeholder content for the second slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item relative float-left w-full">
                            <img
                              src="{{ asset('/img/computer-program-code.png') }}"
                              class="block w-full rounded-lg h-4/5 min-h-max"
                              alt="https://www.freepik.com/photos/background"
                            />
                            <div class="carousel-caption md:block absolute text-center">
                              <h5 class="text-xl">Third slide label</h5>
                              <p>Some representative placeholder content for the third slide.</p>
                            </div>
                          </div>
                        </div>
                        <button
                          class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                          type="button"
                          data-bs-target="#carouselExampleCaptions"
                          data-bs-slide="prev"
                        >
                          <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button
                          class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                          type="button"
                          data-bs-target="#carouselExampleCaptions"
                          data-bs-slide="next"
                        >
                          <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
          </div>
            {{-- EndSlideshow --}}

            <!--Footer-->
            <footer class="bg-gradient-to-r from-green-700 via-green-500 to-green-700 ">
                <div class="container p-8 text-center">
                    <div class="flex flex-nowrap justify-center space-x-4 ">
                        <div>
                            <a href="https://web.facebook.com/UwongNdesoNjapanan/"><img
                                    class="w-full h-10 w-10 rounded-full " src="{{ asset('img/facebook.png') }}"
                                    alt="https://www.flaticon.com/free-icons/facebook"></a>
                        </div>
                        <div>
                            <a href="https://wa.me/6283834819552"><img class="w-full h-10 w-10 rounded-full "
                                    src="{{ asset('img/whatsapp.png') }}"
                                    alt="https://www.flaticon.com/free-icons/whatsapp"></a>
                        </div>
                        <div>
                            <a href="https://www.instagram.com/teguhbudiii"><img class="w-full h-10 w-10 rounded-full "
                                    src="{{ asset('img/instagram.png') }}"
                                    alt="https://www.flaticon.com/free-icons/instagram"></a>
                        </div>
                        <div>
                            <a href="https://www.twitter.com/TeguuhB"><img class="w-full h-10 w-10 rounded-full "
                                    src="{{ asset('img/twitter.png') }}"
                                    alt="https://www.flaticon.com/free-icons/twitter"></a>
                        </div>
                        <div>
                        </div>
                    </div>
                    <div class="mt-4 flex flex-col space-y-4">
                        <div class="">
                            <a class="text-gray-50 hover:text-blue-500 font-semibold font-sans no-underline"
                                href="/">Home</a>
                        </div>
                        <div class="">
                            <a class="text-gray-50 hover:text-blue-500 font-semibold font-sans no-underline"
                                href="{{ url('/profile') }}">Author</a>
                        </div>
                        <div class="">
                            <a class="text-gray-50 hover:text-blue-500 font-semibold font-sans no-underline"
                                href="">About</a>
                        </div>
                        <div class="font-semibold text-white ">
                            &copy; 2022 - <a
                                class="no-underline text-white hover:text-white transition duration-150 ease-out hover:ease-in"
                                href="/">Guh Coding</a> &#128149;
                        </div>
                    </div>
                </div>
        </footer>
        {{-- Akhir Footer --}}

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/TextPlugin.min.js"></script>
        <script>
            gsap.registerPlugin(TextPlugin);
            gsap.to('.kata h1', {
                duration: 3,
                delay: 0.2,
                text: "Tidak ada kata terlambat untuk belajar Coding!"
            })

            gsap.from('.logonih img', {
                duration: 3,
                delay: 0.2,
                opacity: 0,
                x: 100,
                skewX: 45,
                scale: 2,
                rotation: 180,
                ease: 'back'
            })

        </script>

        <script>
        $(document).ready(function(){
          $(".panah-bawah").click(function(){
            $(".slide-show").slideDown("slow");
          });
        });
        </script>
</section>

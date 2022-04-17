@extends('blog.index')
@section('container')
<section class=" dark:bg-gray-800">
    <link rel="stylesheet" href="{{ asset('css/master-style.css') }}">
    <div class="bg-green-200 dark:bg-slate-700 border-b-2 border-green-300 dark:border-teal-400">
        <!--Hero-->
        <div class="pt-10">
            <div class="container relative px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                <!--Left Col-->
                <div class="kata flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">

                    <h1 class="my-4 text-5xl dark:bg-teal-400 rounded-lg p-2 font-bold leading-tight font-mono text-slate-800 dark:text-gray-100 dark:shadow-2xl dark:shadow-teal-400" id="text-glitch" style="text-shadow: 2px 2px 5px rgb(22, 24, 24);">

                    </h1>
                    <button class="relative mx-auto inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                        <a class="no-underline font-sans font-bold relative px-5 py-2.5 transition-all ease-in duration-75 bg-gray-50 dark:bg-gray-900 rounded-md group-hover:bg-opacity-0 text-slate-800 hover:text-gray-50 dark:text-gray-50" href="{{ url('/halaman-post') }}">
                                Yuk Mulai Belajar
                            </a>
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

    {{-- Main --}}
    <div class="container relative">
        <div class="panah-bawah animate-bounce">
            <img src="{{ asset('/img/down-arrow.png') }}" alt="https://www.flaticon.com/free-icons/arrow">
        </div>
        <div class="kotak"></div>
        <div class="main-page">
            <div class="row">
                <hr>
                <div class="text-2xl font-semibold mt-8 mb-20 dark:text-gray-50" style="font-family: 'Hubballi', cursive;"
                    id="tulisan-postingan">
                    <p class="tracking-wide text-6xl">Postingan Terbaru!</p>
                    <p class="">Banyak artikel yang mungkin belum kamu baca nih...</p>
                </div>
                @foreach( $posts as $post)
                <div class="col-lg-3 mb-5">
                    <div class="card dark:bg-gray-700 dark:text-gray-50 dark:shadow-gray-600 shadow-xl w-full" id="card-header">
                        <img src="https://source.unsplash.com/500x400?" class="card-img-top" alt="img-post">
                        <div class="card-body" id="card-body">
                            <h5 class="card-title  font-bold">{{ $post->judul }}</h5>
                            <p class="card-text text-sm mb-2">{!! $post->excerpt !!}</p>
                            <a href="{{ url('/post/'. $post->slug) }}" class="btn btn-success">Ayo baca!</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <hr class="dark:text-gray-50">
            <div class="mt-4"></div>
            <div class="col-md-8 mx-auto mb-5">
              <form name="guh-coding-contact">
                {{ @csrf_field() }} {{ method_field('POST') }}
                <div class="bg-gray-200 dark:bg-gray-700 p-4 rounded-lg">
                  {{-- alert --}}
                  <div id="pesan-alert" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200 d-none" role="alert">
                    <svg class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                    <strong>Terimakasih!</strong> sudah mengirimkan pesan kepada author.
                    </div>
                    <button type="button" id="close" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-collapse-toggle="alert-3" aria-label="Close">
                      <span class="sr-only">Close</span>
                      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                  </div>
                    <p class="mb-3 font-bold text-4xl dark:text-gray-50" style="font-family: 'Hubballi', cursive;">
                        Berikan author sebuah kritik dan saran :D</p>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" name="nama" placeholder="Namamu?" aria-label="Username"
                            aria-describedby="basic-addon1" required>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="Emailmu?"
                            aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" style="resize: none; height: 80px;" placeholder="Leave a comment here" id="floatingTextarea2"
                            name="pesan" style="height: 100px" required></textarea>
                        <label for="floatingTextarea2">Cantumkan pesan!</label>
                    </div>

                    <button type="submit" class="bg-green-500 w-full p-2 rounded-md hover:bg-green-700 btn-kirim">
                        <span class="text-gray-50 font-bold">Kirimkan Pesan!</span>
                    </button>
                    <div class="text-center btn-loading d-none">
                        <div class="spinner-border text-success" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
    {{-- End Main --}}

    <!--Footer-->
    @include('blog.layouts.footer')
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
        const scriptURL =
            'https://script.google.com/macros/s/AKfycbxda6omdKJQElIf9FU2VRjnYVwWEBWqa-jhGvPLD-3HXCOmV5ibq32O0HoHENLrip0-/exec'
        const form = document.forms['guh-coding-contact']
        const btnKirim = document.querySelector('.btn-kirim');
        const btnLoading = document.querySelector('.btn-loading');
        const alert = document.querySelector('#pesan-alert');
        const tutupAlert = document.querySelector('#close');

        form.addEventListener('submit', e => {
            e.preventDefault()
            // ketika dikirim
            btnLoading.classList.toggle('d-none')
            btnKirim.classList.toggle('d-none')

            // tutup alert
            tutupAlert.addEventListener('click', function () {
                alert.classList.toggle('d-none')
            })

            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    btnKirim.classList.toggle('d-none')
                    btnLoading.classList.toggle('d-none')
                    // tampilkan alert
                    alert.classList.toggle('d-none')
                    // reset form
                    form.reset()

                    console.log('Success!', response)
                })
                .catch(error => console.error('Error!', error.message))
        })

    </script>

    <script>
        $(document).ready(function () {
            $(".panah-bawah").click(function () {
                $(".main-page").slideDown("slow");
            });

            $(".panah-bawah").click(function () {
                $(".panah-bawah").hide(300);
            });
        });

    </script>
</section>
@endsection




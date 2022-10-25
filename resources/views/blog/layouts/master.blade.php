@extends('blog.index')
@section('container')
@push('styles-css')
<link rel="stylesheet" href="{{ asset('/css/master-style.css') }}">
@endpush
<section class="dark:bg-gray-800 w-full h-full overflow-x-hidden main_section">
    <div class="bg-green-200 dark:bg-slate-700 border-b-2 border-green-300 dark:border-teal-400">
        <!--Hero-->
        <div class="w-full h-full">
            <div class="grid md:grid-cols-2 grid-cols-1">
                <div class="flex justify-center items-center">
                    <div class="kata w-full md:w-3/4 text-center mx-auto">
                        <h1 class="my-4 text-5xl dark:bg-teal-400 rounded-lg p-2 font-bold leading-tight font-mono text-slate-800 dark:text-gray-100 dark:shadow-2xl dark:shadow-teal-400"
                            id="text-glitch" style="text-shadow: 2px 2px 5px rgb(22, 24, 24);">
                        </h1>
                        <button
                            class="inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                            <a class="no-underline font-sans font-bold px-10 py-3 transition-all ease-in duration-75 bg-gray-50 dark:bg-gray-900 rounded-md group-hover:bg-opacity-0 text-slate-800 hover:text-gray-50 dark:text-gray-50"
                                href="{{ url('/halaman-post') }}">
                                Yuk Mulai Belajar
                            </a>
                        </button>
                    </div>
                </div>
                <!--Right Col-->
                <div class="w-2/3 mx-auto my-8">
                    <img src="{{ asset('img/logo_coding.webp') }}" alt="https://www.freepik.com/vectors/technology" />
                </div>
            </div>
        </div>
    </div>
    <div class="main_ads w-full flex justify-center mt-5 mb-5">
        <div class="w-11/12 h-auto p-2">
            <script async
                src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8107901415702789"
                crossorigin="anonymous"></script>
            <!-- Iklan Horizontal -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8107901415702789"
                data-ad-slot="4920278246" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});

            </script>
        </div>
    </div>
    {{-- Main --}}
    <div class="main__section">
        <div class="main-wrapper w-full h-full">
            <div class="text__header md:mx-10 mx-0 md:text-start text-center">
                <div class="font-semibold mt-8 mb-20 text-gray-600 space-y-3 dark:text-gray-50" id="tulisan-postingan">
                    <p class="text-6xl">Postingan Terbaru!</p>
                    <p class="text-2xl">Banyak artikel yang mungkin belum kamu baca nih...</p>
                </div>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1">
                @foreach ($posts as $post)
                <div class="mt-2 mb-5 flex justify-center" id="scale-kotak">
                    <div class="kotak-post rounded-lg">
                        <img class="rounded-t-lg" src="{{ asset('storage/public/post-images/' . $post->image) }}"
                            alt="{{ $post->image }}" loading="lazy" class="gambar-post">
                        <a href="{{ url('/post/'.$post->slug) }}"
                            class="judul text-xl font-semibold mt-1 text-gray-600 hover:text-blue-500">{{ $post->judul }}</a>
                        <p class="excerpt text-sm mt-2">{{ $post->excerpt }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <hr class="dark:text-gray-50 border-2 border-gray-400 mx-20 mt-5">
            <div class="flex justify-center mt-8 mb-8">
                <div class="md:w-3/4 w-full md:mx-0 mx-7 h-auto shadow-md shadow-gray-400">
                    <form name="guh-coding-contact">
                        @csrf {{ method_field('POST') }}
                        <div class="bg-gray-200 dark:bg-gray-700 p-4 rounded-lg">
                            <div id="pesan-alert" class="hidden">
                                <div class="flex items-center p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200"
                                    role="alert">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                                        <strong>Thankyou!</strong> for sending the feedback into author.
                                    </div>
                                    <button type="button" id="close"
                                        class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300"
                                        data-collapse-toggle="alert-3" aria-label="Close">
                                        <span class="sr-only">Close</span>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <p class="mb-3 font-semibold text-4xl text-gray-500 dark:text-gray-50">
                                Give Feedback To Author!</p>
                            <div class="input-group mb-3">
                                <label for="nama" class="text-lg text-gray-500">Your Name</label>
                                <input type="text" placeholder="Your name???"
                                    class="w-full rounded p-1 border-2 border-green-400 focus:outline-none focus:border-green-600"
                                    name="nama" id="nama">
                            </div>

                            <div class="input-group mb-3">
                                <label for="email" class="text-lg text-gray-500">Your Email</label>
                                <input type="text" placeholder="Your email???"
                                    class="w-full rounded p-1 border-2 border-green-400 focus:outline-none focus:border-green-600"
                                    name="email" id="email">
                            </div>

                            <div class="form-group mb-3">
                                <label for="pesan" class="text-lg text-gray-500">Your Feedback!</label>
                                <textarea type="text"
                                    class="w-full rounded p-1 border-2 border-green-400 focus:outline-none focus:border-green-600"
                                    placeholder="Throw your feedback here...." name="pesan" id="pesan"></textarea>
                            </div>

                            <button type="submit"
                                class="bg-green-500 w-full p-2 rounded-md hover:bg-green-700 btn-kirim">
                                <span class="text-gray-50 font-bold">Send Message</span>
                            </button>
                            <div class="btn-loading hidden">
                                <div class="flex justify-center">
                                    <div class="w-9 h-9 border-b-4 border-green-500 animate-spin rounded-full"
                                        role="status">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- End Main --}}
    @push('js-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/TextPlugin.min.js"></script>
    <script>
        gsap.registerPlugin(TextPlugin);
        gsap.to('.kata h1', {
            duration: 3,
            delay: 0.2,
            text: "Tidak ada kata terlambat untuk belajar Coding!"
        })

    </script>
    @endpush
    <script src="{{ asset('/js/contact-form.js') }}"></script>
</section>
@endsection

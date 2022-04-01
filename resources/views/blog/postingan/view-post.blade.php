@extends('blog.index')
@section('container')
<section class="bg-gray-100 dark:bg-gray-800">
    <!-- Cod Box Copy begin -->
<link rel="dns-prefetch" href="//cdn.jsdelivr.net" />
<link href="{{ asset('/css/prism.min.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/gh/jablonczay/code-box-copy/code-box-copy/css/code-box-copy.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs/prism.min.js"></script>
<script src="https://cdn.jsdelivr.net/combine/gh/jablonczay/code-box-copy/clipboard/clipboard.min.js,gh/jablonczay/code-box-copy/code-box-copy/js/code-box-copy.min.js"></script>
<!-- Cod Box Copy end -->
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <div class="container pt-20 container-postingan dark:bg-slate-800">

        <article class="article bg-gray-50 border-1 border-slate-400 shadow-xl dark:text-gray-50  font-sans leading-relaxed dark:bg-gray-700 dark:shadow-xl dark:shadow-gray-600">
            <div class="mt-3 mb-3 bg-gray-300 rounded-lg p-2">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                      <a href="{{ url('/') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-700 dark:hover:text-white">
                        <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                        Home
                      </a>
                    </li>
                    <li>
                      <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-800 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <a href="{{ url('/halaman-post') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-700 dark:hover:text-white">Article</a>
                      </div>
                    </li>
                    <li aria-current="page">
                      <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-800 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:text-gray-700">{{ $post->judul }}</span>
                      </div>
                    </li>
                  </ol>
            </div>
            <p class="text-4xl mb-10 font-semibold">{{ $post->judul }}</p>
            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="w-full rounded-lg h-80 mb-5" alt="gambar-konten">
            <p class="indent-10">
                {!! $post->body !!}
            </p>
            <hr class="mt-10 mb-10">
            {{-- profile card --}}
            <div class="bg-gray-50 dark:bg-gray-600 rounded-lg shadow-md dark:shadow-lg dark:shadow-gray-600 mb-3"
                id="profile-card">
                <div class=" rounded-lg p-6">
                    <div class="flex items-center space-x-6 mb-4">
                        <img class="h-28 w-28 ml-2 object-cover object-center rounded-full"
                            src="{{ asset('img/teguh.jpeg') }}" alt="photo">
                        <div>
                            <p class="text-xl text-slate-900 dark:text-gray-50 font-normal mb-1">{{ $post->author }}</p>
                            <p class="text-xs text-blue-600 dark:text-blue-400 font-normal">Web Developer</p>
                        </div>
                    </div>
                    <div>
                        <p class="text-gray-800 dark:text-gray-50 leading-loose font-normal text-base">
                            Kalau kamu berfokus pada masa lalu, Maka kamu tidak akan bisa meraih masa depan.
                        </p>
                    </div>
                </div>
            </div>
        </article>

        <aside class="aside">
            <div class="card kartu">
                <div class="card-body border-1 border-slate-400 dark:bg-gray-700">
                    <form name="guh-coding-contact">
                        {{ csrf_field() }} {{ method_field('POST') }}
                        <div class="alert alert-success alert-dismissible fade show d-none pesan-alert" role="alert">
                            <strong>Terimakasih!</strong> Pesan anda sudah diterima.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <p class="mb-4 font-bold text-2xl dark:text-gray-50">Hey berikan kritik dan saran kepada author!</p>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" name="nama" placeholder="Namamu?" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control" name="email" placeholder="Emailmu?" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="pesan" style="height: 100px" required></textarea>
                            <label for="floatingTextarea2">Cantumkan pesan!</label>
                          </div>

                        <button type="submit" class="bg-green-500 w-full p-2 rounded-md hover:bg-green-700 btn-kirim">
                            <span class="text-gray-50 font-bold">Kirimkan Pesan!</span>
                        </button>
                        <div class="text-center d-none btn-loading">
                            <div class="spinner-border text-success" role="status">
                                <span class="sr-only"></span>
                            </div>
                        </div>
                        <div class="alert alert-success alert-dismissible fade show mt-3 d-none pesan-alert"
                            role="alert">
                            <strong>Terimakasih!</strong> Pesan anda sudah diterima.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
    <div class="artikel-side">
    <div class="w-full h-auto mt-8 bg-gray-300 dark:bg-gray-600 rounded-t-lg">
        <p class="py-2.5 text-lg font-bold text-center dark:text-gray-50">Artikel Terbaru</p>
        <hr class="dark:text-gray-50">
    </div>
    @foreach ($popular as $items)
    <div class="card-body border-l-4 mt-2 rounded-r-lg border-blue-600 bg-gray-300 dark:bg-gray-700 flex flex-nowrap">
        <img src="https://source.unsplash.com/500x400?" class="text-left w-20 mr-2 rounded-md" alt="gambar-artikel">
        <a class="no-underline text-gray-800 dark:text-gray-50 dark:hover:text-blue-400 hover:text-gray-700"
        href="{{ url('/post/'.$items->slug) }}"><p class="font-semibold font-sans text-lg">{{ $items->judul }}</p></a>
    </div>
    @endforeach
</div>
        </aside>
    </div>

    <div class="diskusi container">
    <div class="row">
        <div class="col-md-10 mx-auto bg-gray-50 dark:bg-gray-700 mt-5 p-4 rounded-lg">
            <div id="disqus_thread" class="mt-3"></div>
            <script>
                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */

                // var disqus_config = function () {
                // this.page.url = {{ Request::url() }};  // Replace PAGE_URL with your page's canonical URL variable
                // this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                // };

                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://guhcoding.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
            </script>
        </div>
    </div>
</div>

    <div class="container">
    <div class="footer-post">
        <div class="mt-5">
            <p class="text-3xl font-sans font-semibold text-center dark:text-teal-500">POSTINGAN MENARIK LAINYA!</p>
        </div>
        <div class="p-4 mb-10">
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-md-4 mt-4">
                    <div class="card dark:shadow-2xl dark:bg-gray-700 dark:shadow-gray-600">
                        <a class="no-underline text-blue-300 hover:text-blue-500"
                            href=""><img
                                src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                class="card-img-top p-2" alt="gambarmane"></a>
                        <div class="card-body">
                            <h5 class="card-title dark:text-gray-50 font-semibold">{{ $post->judul }}</h5>
                            <p class="card-text dark:text-gray-50  text-sm">{!! $post->excerpt !!}</p>
                            <div class="flex items-center justify-start mt-2">
                                <a href="{{ url('/post/'.$post->slug) }}"
                                    class="no-underline inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-700 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Read more
                                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@include('blog.layouts.footer')

<script>
    jQuery(document).ready(function($){
        $('.code-box-copy').codeBoxCopy({
            tooltipText: 'Copied',
            tooltipShowTime: 1000,
            tooltipFadeInTime: 300,
            tooltipFadeOutTime: 300
        });
});
</script>
<script>
        const scriptURL =
            'https://script.google.com/macros/s/AKfycbxda6omdKJQElIf9FU2VRjnYVwWEBWqa-jhGvPLD-3HXCOmV5ibq32O0HoHENLrip0-/exec'
        const form = document.forms['guh-coding-contact']
        const btnKirim = document.querySelector('.btn-kirim');
        const btnLoading = document.querySelector('.btn-loading');
        const alert = document.querySelector('.pesan-alert');
        const tutupAlert = document.querySelector('.close');

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

</section>
@endsection
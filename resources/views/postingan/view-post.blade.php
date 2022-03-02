<section class="bg-stone-50">
@include('layouts.nav')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <div class="container container-postingan dark:bg-slate-800">
        <div class="side ">
            {{-- <a class="no-underline text-slate-700 hover:text-black" href="#top"><i
                    class="bi bi-arrow-up-circle fixed mt-10 text-3xl"></i></a>

            <a class="no-underline text-slate-700 hover:text-black" ><i
                    class="bi bi-moon-stars fixed mt-20 text-3xl" id="tombol-dark"></i></a> --}}
        </div>


        <article class="article bg-gray-50 border-1 border-slate-400 shadow-xl dark:bg-slate-800">
            <p class="indent-10 font-sans leading-relaxed">
                {!! $body !!}
            </p>
            <hr class="mt-10 mb-10">
            <div class="bg-gray-50 border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mb-3"
                id="profile-card">
                <div class=" rounded-lg p-6">
                    <div class="flex items-center space-x-6 mb-4">
                        <img class="h-28 w-28 ml-2 object-cover object-center rounded-full"
                            src="{{ asset('img/teguh.jpeg') }}" alt="photo">
                        <div>
                            <p class="text-xl text-slate-900 font-normal mb-1">{{ $author }}</p>
                            <p class="text-xs text-blue-600 font-normal">Web Developer</p>
                        </div>
                    </div>
                    <div>
                        <p class="text-gray-800 leading-loose font-normal text-base">Lorem ipsum dolor sit amet,
                            consectetur
                        </p>
                    </div>
                </div>
            </div>
        </article>

        <aside class="aside">
            <div class="card kartu">
                <div class="card-body">
                    <form name="guh-coding-contact">
                        {{ csrf_field() }} {{ method_field('POST') }}
                        <div class="alert alert-success alert-dismissible fade show d-none pesan-alert" role="alert">
                            <strong>Terimakasih!</strong> Pesan anda sudah diterima.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <p class="mb-4 font-bold text-2xl">Hey berikan kritik dan saran kepada author!</p>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" name="nama" placeholder="Namamu?" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control" name="email" placeholder="Emailmu?" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="pesan" style="height: 100px"></textarea>
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
        </aside>
    </div>

    <div class="diskusi">
    <div class="row">
        <div class="col-md-10 mx-auto bg-white mt-5 p-4">
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


    <footer class="footer-post">
        <div class="text-3xl font-sans font-semibold text-center mt-5">
            <p>POSTINGAN MENARIK LAINYA!</p>
        </div>
        <div class="p-4 mb-10">
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-md-4 mt-2">
                    <div class="card">
                        <a class="no-underline text-blue-300 hover:text-blue-500"
                            href="{{ url('halaman-post/post/view/'.$post->category->slug) }}"><img
                                src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                class="card-img-top p-2" alt="gambarmane"></a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->judul }}</h5>
                            <p class="card-text truncate">{{ $post->body }}</p>
                            <div class="flex items-center justify-start mt-2">
                                <a href="{{ url('halaman-post/post/view/'.$post->category->slug) }}"
                                    class="no-underline inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
        @include('layouts.footer')
    </footer>

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

@extends('blog.index')
@section('container')
@push('styles-css')
<!-- Cod Box Copy begin -->
<link rel="dns-prefetch" href="//cdn.jsdelivr.net" />
<link href="{{ asset('/css/prism.min.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/gh/jablonczay/code-box-copy/code-box-copy/css/code-box-copy.min.css"
    rel="stylesheet" />
<!-- Cod Box Copy end -->
@endpush
<div class="bg-gray-100 dark:bg-gray-700 w-full h-full overflow-x-hidden">
    <div class="wrapper">
        <div class="flex justify-center">
            <div class="header__ads w-10/12 p-2 h-12 md:mb-44 mb-64 mt-8 text-black">
                <script async src="https://pagead2.googlesyndication.com/pagead/>
                crossorigin=" anonymous"></script>
                <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article"
                    data-ad-format="fluid" data-ad-client="ca-pub-8107901415702789" data-ad-slot="8577889011"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});

                </script>
            </div>
        </div>
        <div class="parent_grid grid lg:grid-cols-3 grid-cols-1 sm:gap-0 gap-5">
            <div class="left_item flex justify-center lg:col-span-2">
                <div
                    class="w-11/12 mb-10 rounded-md p-2 bg-white/100 border border-gray-400 shadow-md text-gray-700 dark:text-gray-50  font-sans leading-loose dark:bg-gray-700 dark:shadow-xl dark:shadow-gray-600 unreset">
                    <div class="mt-3 mb-3 bg-gray-300 rounded-lg p-2 flex justify-center" id="badge-penunjuk">
                        <div class="inline-flex items-center space-x-1 ">
                            <div class="inline-flex items-center list-none">
                                <a href="{{ url('/') }}"
                                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-700 dark:hover:text-white">
                                    <svg class=" w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div>
                                <div class="flex items-center list-none">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-gray-400" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="{{ url('/halaman-post') }}"
                                        class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-700 dark:hover:text-white">Artikel</a>
                                </div>
                            </div>
                            <div aria-current="page">
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-gray-400" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span
                                        class="ml-1 text-sm font-medium text-gray-700 md:ml-2 dark:text-gray-700">{{ $post->judul }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text_title">
                        <h1>{{ $post->judul }}</h1>
                    </div>
                    <div class="created_at">
                        <p>
                            <span class="dark:text-gray-400">Diposting pada:</span> <span
                                class="dark:text-gray-50 text-gray-700 font-semibold">{{ $post->created_at->format('Y F, d') }}</span>
                            <span class="dark:text-gray-400">by</span> <span
                                class="text-gray-700 font-semibold dark:text-gray-50">{{ $post->author }}</span>
                        </p>
                    </div>
                    <div class="tags flex items-center space-x-3">
                        <span>Tags:</span>
                        <div class="flex items-center space-x-3">
                            @foreach ($post->categories as $category)
                            <a href="{{ URL('/categories/' . $category->slug) }}"
                                class="py-0.5 px-4 rounded bg-blue-300 hover:bg-blue-500 hover:text-white text-blue-600 transition-colors duration-300">#{{ $category->name }}</a>
                            @endforeach
                        </div>

                    </div>
                    <div class="img_post mb-5 mt-8">
                        <img src="{{ asset('storage/public/post-images/' . $post->image) }}"
                            class="rounded-md w-full max-h-96" alt="{{ $post->image  }}">
                    </div>
                    <div class="ads_article w-full mt-3">
                        <script async
                            src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8107901415702789"
                            crossorigin="anonymous"></script>
                        <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article"
                            data-ad-format="fluid" data-ad-client="ca-pub-8107901415702789" data-ad-slot="8577889011"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});

                        </script>
                    </div>
                    <article class="text-gray-800 dark:text-white">{!! $post->body !!}</article>
                    <div class="bg-gray-50 dark:bg-gray-600 rounded-lg shadow-lg shadow-gray-400 dark:shadow-lg dark:shadow-gray-600 mb-3"
                        id="profile_card">
                        <div class=" rounded-lg p-6">
                            <div class="flex items-center space-x-6 mb-4">
                                <img class="h-28 w-28 ml-2 object-cover rounded-full"
                                    src="{{ asset('img/teguh.jpeg') }}" alt="photo">
                                <div>
                                    <p class="text-xl text-slate-900 dark:text-gray-50 font-normal mb-1">
                                        {{ $post->author }}
                                    </p>
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
                </div>
            </div>
            <aside class="right_item">
                <div class="w-11/12 min-h-max mx-auto p-2 rounded-t-lg text-center bg-gray-200 dark:bg-gray-500">
                    <p class="font-semibold text-gray-600 dark:text-gray-50 text-lg">Artikel Terbaru</p>
                </div>
                @foreach ($randoms as $randomPosts)
                <div
                    class="card-body w-11/12 min-h-max mx-auto p-2 border-l-4 mt-2 rounded-r-lg border-blue-600 bg-gray-200 dark:bg-gray-500 flex items-center">
                    <a class="no-underline text-gray-800 dark:text-gray-50 dark:hover:text-blue-400 hover:text-gray-700"
                        href="{{ url('/post/'.$randomPosts->slug) }}">
                        <p class="font-semibold font-sans text-lg">{{ $randomPosts->judul }}</p>
                    </a>
                </div>
                @endforeach
                <div class="mt-8">
                    <script async
                        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8107901415702789"
                        crossorigin="anonymous"></script>
                    <!-- Sidebar iklan -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8107901415702789"
                        data-ad-slot="4167582702" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});

                    </script>
                </div>
                <div class="mt-3">
                    <script async
                        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8107901415702789"
                        crossorigin="anonymous"></script>
                    <!-- Sidebar iklan -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8107901415702789"
                        data-ad-slot="4167582702" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});

                    </script>
                </div>
            </aside>
        </div>
        {{-- <div class="diskusi w-full mt-8  pb-10">
            <div class="md:w-3/4 w-11/12 mx-auto bg-white/100 dark:bg-gray-200 p-3 rounded-lg">
                <div id="disqus_thread" class="mt-3"></div>
                <script>
                    (function () {
                        var d = document,
                            s = d.createElement('script');
                        s.src = 'https://guhcoding.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();

                </script>
            </div>
        </div> --}}
    </div>
</div>
@push('js-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.0/highlight.min.js"></script>
<script>
    hljs.highlightAll();

</script>
<script src="https://cdn.jsdelivr.net/npm/prismjs/prism.min.js"></script>
<script
    src="https://cdn.jsdelivr.net/combine/gh/jablonczay/code-box-copy/clipboard/clipboard.min.js,gh/jablonczay/code-box-copy/code-box-copy/js/code-box-copy.min.js">
</script>
<script>
    jQuery(document).ready(function ($) {
        $('.code-box-copy').codeBoxCopy({
            tooltipText: 'Copied',
            tooltipShowTime: 1000,
            tooltipFadeInTime: 300,
            tooltipFadeOutTime: 300
        });
    });

</script>
@endpush
@endsection

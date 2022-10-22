<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GUH | {{ $title ?? 'Home' }}</title>
    <link rel="shortcut icon" href="{{ asset('/img/GuhCoding.png') }}" type="image/x-icon">
    <meta name="description"
        content="GuhCoding.com Merupakan Website Tutorial Programming dan Coding Dijelaskan Dengan Jelas dan Terperinci" />
    <meta name="keywords"
        content="guhcoding, Laravel, Tailwind, Tutorial Laravel, Tutorial Tailwind, Linux, Tips Trik Linux" />
    <meta name="author" content="Teguh Budi Laksono" />
    <meta name="theme-color" content="#242020">
    <meta name="msapplication-navbutton-color" content="#242020" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#242020" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    {{-- Highlight Syntax --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.0/styles/base16/dracula.min.css">
    {{-- End Highlight --}}

    {{-- CSS Unreset --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/unreset.css') }}">
    @stack('styles-css')
    {{-- End CSS --}}

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'post-home': '#c0ffee',
                    }
                }
            }
        };

    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8107901415702789"
        crossorigin="anonymous"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FGS1E06Y6J"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-FGS1E06Y6J');

    </script>
    <style>
        *,
        html,
        body {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

    </style>
</head>

<body>
    @include('blog.layouts.nav')

    <main>
        @yield('container')
    </main>
    @include('blog.layouts.footer')
    @stack('js-scripts')
</body>

</html>

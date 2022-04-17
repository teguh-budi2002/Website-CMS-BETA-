<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GUH | Dashboard</title>


    <!-- Bootstrap core CSS -->
<link href="{{ asset('/css/css-bootstrap/bootstrap.min.css') }}" rel="stylesheet">
{{-- <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script> --}}

<!-- Cod Box Copy begin -->
<link rel="dns-prefetch" href="//cdn.jsdelivr.net" />
<link href="{{ asset('/css/prism.min.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/gh/jablonczay/code-box-copy/code-box-copy/css/code-box-copy.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs/prism.min.js"></script>
<script src="https://cdn.jsdelivr.net/combine/gh/jablonczay/code-box-copy/clipboard/clipboard.min.js,gh/jablonczay/code-box-copy/code-box-copy/js/code-box-copy.min.js"></script>
<!-- Cod Box Copy end -->

{{-- Highlight --}}
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.0/styles/base16/dracula.min.css">
{{-- End Highlight --}}
<link rel="stylesheet" type="text/css" href="{{ asset('/css/unreset.css') }}">
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
      darkMode: 'class',
      theme: {
          extend: {
              colors: {

              },
          },
      },
      plugins: [
    require('@tailwindcss/typography'),
    ],
  };
</script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/dashboard.css') }}" rel="stylesheet">
  </head>
  <body>

@include('dashboard.partial.header')

<div class="container-fluid">
  <div class="row">

@include('dashboard.partial.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     @yield('container')

    </main>
  </div>
</div>


    {{-- <script src="{{ asset('js/js-bootstrap/bootstrap.min.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>


  </body>
</html>

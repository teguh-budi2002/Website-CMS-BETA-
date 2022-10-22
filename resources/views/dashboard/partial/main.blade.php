<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GUH | Dashboard</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/unreset.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    @stack('head-stack')
</head>

<body class="bg-gray-500">

    @include('dashboard.partial.header')

    <main>
        @yield('container')
    </main>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    @stack('body-stack')
</body>

</html>

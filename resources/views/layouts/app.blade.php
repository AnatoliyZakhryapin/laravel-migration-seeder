<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/08d5002177.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="d-flex flex-column">

    {{-- header --}}
    {{-- @include('partials.header') --}}

    {{-- main content --}}
    <main class="flex-grow-1">
        @yield('content')
    </main>

    {{-- footer --}}
    {{-- @include('partials.footer') --}}

</body>

</html>
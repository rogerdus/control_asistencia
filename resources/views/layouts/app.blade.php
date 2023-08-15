<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    {{-- <link rel="stylesheet" href="{{ asset('js/nprogress/nprogress.css') }}">
    <script src="{{ asset('js/nprogress/nprogress.js') }}"></script> --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
</head>
<body>
    <div id="app">
        <nav class="navbar bg-primary opacity-75">
            <div class="container-fluid">
                @include('sweetalert::alert')
              {{-- <a class="navbar-brand light-text-emphasis" href="#">
                FGJEM
              </a> --}}
            </div>
          </nav>
        <main class="py-4">
            @yield('content')
        </main>
        @yield('script')
        {{-- <script src="{{ asset('assets/js/asistencias/barcode.js') }}" defer></script> --}}
    </div>
</body>
</html>

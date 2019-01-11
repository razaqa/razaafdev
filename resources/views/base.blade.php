<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="ltr">
    <head>
        <!-- Meta Data -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="description" content="Description of the page">

        <!-- FavIcon -->
        <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">

        <!-- Apple Devices -->
        <link rel="apple-touch-icon" href="{{ asset('css/logo.png') }}">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.26/css/uikit.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <!-- Default Style -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Basic Style -->
        <link rel="stylesheet" href="{{ asset('css/base.css') }}">
        <!-- Header Style -->
        <link rel="stylesheet" href="{{ asset('css/layouts/_header.css') }}">
        <!-- Sidebar Style -->
        <link rel="stylesheet" href="{{ asset('css/layouts/_sidebar.css') }}">
        <!-- Footer Style -->
        <link rel="stylesheet" href="{{ asset('css/layouts/_footer.css') }}">

        <!-- Additional CSS-->
        @yield('extra-css')

        <title>
            @yield('title')
        </title>
    </head>
    <body>
        @include('layouts._header')
        @yield('content')
        @include('layouts._footer')

        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <!-- UIkit JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.26/js/uikit.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.26/js/uikit-icons.min.js"></script>

        <!-- Default JS -->
        <script type="application/javascript" src="{{ asset('js/app.js') }}"></script>
        <!-- Basic JS -->
        <script type="application/javascript" src="{{ asset('js/base.js') }}"></script>
        <!-- Header JS -->
        <script type="application/javascript" src="{{ asset('js/layouts/_header.js') }}"></script>
        <!-- Sidebar JS -->
        <script type="application/javascript" src="{{ asset('js/layouts/_sidebar.js') }}"></script>
        <!-- Footer JS -->
        <script type="application/javascript" src="{{ asset('js/layouts/_footer.js') }}"></script>

        <!-- Additional JS-->
        @yield('extra-js')
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        <link rel="icon" href="favicon.ico">

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/flaticon.css">
        <link rel="stylesheet" href="/css/sitefont.css">
        <link rel="stylesheet" href="/css/fontawesome-all.css">
        <link rel="stylesheet" href="/css/owl.carousel.css">
        <link rel="stylesheet" href="/css/twenty.css">
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="/css/video.min.css">
        <link rel="stylesheet" href="/css/odometer-theme-default.css">
        <link rel="stylesheet" href="/css/style.css">
       @yield('styles')
    </head>

    <body>
        @yield('loader')

        @yield('navbar')

        @yield('body')

        @yield('footer')

        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/popper.min.js"></script>
        <script src="/js/owl.carousel.min.js"></script>
        <script src="/js/owl.carousel2.thumbs.js"></script>
        <script src="/js/jarallax.js"></script>
        <script src="/js/jquery.magnific-popup.min.js"></script>
        <script src="/js/appear.js"></script>
        <script src="/js/wow.min.js"></script>
        <script src="/js/twenty.js"></script>
        <script src="/js/odometer.js"></script>
        <script src="/js/script.js"></script>
        @yield('scripts')
    </body>
</html>

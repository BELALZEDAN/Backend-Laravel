@extends('app')

@section('styles')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/sitefont.css">
    <link rel="stylesheet" href="/assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/assets/css/odometer-theme-default.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/video.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">

@endsection

@section('loader')
    @include('layouts.loader.loader')
@endsection


@section('navbar')
    @include('layouts.navbar.nav')
@endsection


@section('body')
    @yield('body')
@endsection


@section('footer')
    @include('layouts.footer.footer')
@endsection


@section('scripts')
 <!--   <script src="/assets/js/jquery.min.js"></script>-->
	<!--<script src="/assets/js/bootstrap.min.js"></script>-->
	<!--<script src="/assets/js/popper.min.js"></script>-->
	<!--<script src="/assets/js/owl.carousel.min.js"></script>-->
	<!--<script src="/assets/js/jarallax.js"></script>-->
	<!--<script src="/assets/js/jquery.magnific-popup.min.js"></script>-->
	<!--<script src="/assets/js/appear.js"></script>-->
	<!--<script src="/assets/js/wow.min.js"></script>-->
	<!--<script src="/assets/js/odometer.js"></script>-->
	<!--<script src="/assets/js/jquery.filterizr.js"></script>-->
	<!--<script src="/assets/js/imagesloaded.pkgd.min.js"></script>-->
	<!--<script src="/assets/js/script.js"></script>-->
@endsection

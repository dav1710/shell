<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" id="csrf-token">
    {{-- <link rel="shortcut icon" href="{{ asset('img/ombuds_logo.png') }}" type="image/x-icon"> --}}
    <link href="{{ asset('css/style.css?v=' . date('YmdHis')) }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('leaflet/leaflet.css') }}" crossorigin="" />

    @yield('styles')

    <title>@yield('title')</title>
</head>

<body>
    <header id="header" class="fixed-top d-flex align-items-center header-scrolled">
        <div class="container d-flex align-items-center">

          <div class="d-flex logo">
                <img src="{{ asset('img/logo.png') }}" alt="logo">
           <div class="f-flex logo_title">
                <h1>Shell Licensee</h1>
                <h2>Royal Oil </p>
           </div>
          </div>

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto" href="#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">About</a></li>
              <li><a class="nav-link scrollto" href="#services">Services</a></li>
              <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
              <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi mobile-nav-toggle bi-list"></i>
          </nav><!-- .navbar -->

          <div class="header-social-links d-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>

        </div>
      </header>
    @yield('content')

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('leaflet/leaflet.js') }}" crossorigin=""></script>
    <script src="{{ asset('js/main.js') }}"></script>

    @yield('scripts')
</body>

</html>

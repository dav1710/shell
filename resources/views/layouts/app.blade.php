<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" id="csrf-token">
    {{-- <link rel="shortcut icon" href="{{ asset('img/ombuds_logo.png') }}" type="image/x-icon"> --}}
    <link href="{{ asset('css/style.css?v=' . date('YmdHis')) }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('leaflet/leaflet.css') }}" crossorigin="" />

    @yield('styles')

    <title>@yield('title')</title>
</head>

<body>
    <header id="header" class="fixed-top d-flex align-items-center header-scrolled">
        <div class="container container_header d-flex align-items-center justify-content-around">

          <div class="d-flex logo col-3">
                <img src="{{ asset('img/logo.png') }}" alt="logo">
           <div class="f-flex logo_title">
                <h1>Shell Licensee</h1>
                <h2>Royal Oil </p>
                <h2>{{ __('general.title') }}</h2>
           </div>
          </div>

          <nav id="navbar" class="navbar col-6">
            <ul>
              <li><a class="nav-link scrollto" href="#home" data-scroll="home">Home</a></li>
              <li><a class="nav-link scrollto" href="#shop" data-scroll="shop">Our Shop</a></li>
              <li><a class="nav-link scrollto" href="#about" data-scroll="about">About</a></li>
              <li><a class="nav-link scrollto" href="#contact_us" data-scroll="contact_us">Contact Us</a></li>
            </ul>
            <i class="bi mobile-nav-toggle bi-list"></i>
          </nav>
          <div class="search col-3">
            <div class="container_search">
                <input type="text" maxlength= "12"  placeholder="Search" class="searchbar">
            <img src="{{ asset('img/search.png') }}" alt="Magnifying Glass" class="button">
            </div>
          </div>
        </div>
      </header>
    @yield('content')

<footer class="footer">
    <div class="footer_grid">
        <div class="footer_grid_item">
            <div id="map" style="width: 300px; height: 300px; margin: 0px auto 30px auto"></div>
        </div>
        <div class="footer_grid_item">
            <div class="d-flex flex-column">
                <div class="information_title">
                    <h2>Contact Information</h2>
                </div>
                <div class="information_address">
                    <h2>Address</h2>
                    <p>Somewhere 45, 0015 Yerevan, Armenia</p>
                </div>
                <div class="information_phone">
                    <h2>Phone</h2>
                    <a href="tel:347-00-00-00">+347 00 00 00</a>
                </div>
                <div class="information_email">
                    <h2>E-Mail</h2>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=smth@gmail.com" target="_blank">smth@gmail.com</a>
                </div>
            </div>
        </div>
        <div class="footer_grid_item">
            <div class="d-flex flex-column">
                <div class="stay_in_touch">
                    <h2>Stay in Touch</h2>
                    <div class="d-flex flex-row social_links">
                        <a href="#"><img src="{{ asset('img/fb.png') }}" alt="fb"></a>
                        <a href="#"><img src="{{ asset('img/instagram.png') }}" alt="instagram"></a>
                        <a href="#"><img src="{{ asset('img/linkdin.png') }}" alt="linkdin"></a>
                        <a href="#"><img src="{{ asset('img/twitter.png') }}" alt="twitter"></a>
                    </div>
                </div>
                <div class="stay_in_touch">
                    <h2>Support</h2>
                    <div class="d-flex flex-column">
                        <a href="#">Privacy and Policy</a>
                        <a href="#">Terms of Use</a>
                        <a href="#">Cookies</a>
                        <a href="#">Legal, Safety and Trademark info</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer_grid_item">
            <div class="d-flex flex-column">
                <div class="about_footer">
                    <h2>About</h2>
                    <div class="d-flex flex-column">
                        <a href="#">Site Map</a>
                        <a href="#">FAQ</a>
                    </div>
                </div>
                <div class="languages">
                    <h2>Languages</h2>
                    <div class="d-flex flex-column">
                        <a href="{{ app()->getLocale() == 'en' ? 'javascript:void(0)' : asset('locale/en') }}" class="lang" value="en"><img src="{{ asset('img/united-kingdom.png') }}" alt="uk"> English</a>
                        <a href="{{ app()->getLocale() == 'ru' ? 'javascript:void(0)' : asset('locale/ru') }}" class="lang" value="ru"><img src="{{ asset('img/russia.png') }}" alt="russia"> Russia</a>
                        <a href="{{ app()->getLocale() == 'am' ? 'javascript:void(0)' : asset('locale/am') }}" class="lang" value="am"><img src="{{ asset('img/armenia.png') }}" alt="armenia"> Armenia</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('leaflet/leaflet.js') }}" crossorigin=""></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')
</body>

</html>

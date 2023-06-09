@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
<section class="slider_section" id="home" data-anchor="home">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active slider_li"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="slider_li"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="slider_li"></li>
        </ol>
        <div class="carousel-inner home_slider_inner">
            <div class="carousel-item home_carousel_item active">
                <img src="{{ asset('img/slider1.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/slider2.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/slider1.png') }}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
</section>

<section class="our_services_section" id="services" data-anchor="services">
    <div class="container">
        <h2 class="services_title">Our Services</h2>
        <div class="our_services d-flex justify-content-around">
            <div class="our_services_card d-flex flex-column col-3">
                <img src="{{ asset('img/our_service.png') }}" alt="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
            <div class="our_services_card d-flex flex-column col-3">
                <img src="{{ asset('img/our_service.png') }}" alt="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
            <div class="our_services_card d-flex flex-column col-3">
                <img src="{{ asset('img/our_service.png') }}" alt="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
            <div class="our_services_card d-flex flex-column col-3">
                <img src="{{ asset('img/our_service.png') }}" alt="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
        </div>
    </div>
</section>

<section id="shop" data-anchor="shop">
    <div class="our_shop">
        <h2 class="shop_title">Our Shop</h2>
        <div class="row">
            <div class="owl-carousel product-carousel owl-theme">
                @foreach ($product as $item)
                    <div class="item">
                        <div class="card">
                            <img src="{{ asset('storage/uploads/product/'.$item->img) }}" alt="{{ $item->img }}" class="product_image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title_am }}</h5>
                                <p class="price">{{ $item->price }} AMD</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <a href="{{ route('more_product') }}" class="more_product">More</a>
    </div>
</section>

<section id="about" data-anchor="about">
    <div class="container about">
        <h2 class="about_title">About</h2>
        <div class="row d-flex">
            <div class="about_img">
                <img src="{{ asset('img/about.png') }}" alt="about">
            </div>
            <div class="about_text">
                <div class="about_text_title">
                    <p>Oil and Gas Company About</p>
                </div>
                <div class="about_text_subtitle">
                    <p>Subtitle Here</p>
                </div>
                <div class="about_text_description">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact" id="contact_us" data-anchor="contact_us">
    <div class="container">
        <h2 class="contact_title">Contact Us</h2>
        <div class="our_services d-flex justify-content-around">
            <div class="our_contact_card d-flex flex-column col-3">
                <img src="{{ asset('img/location.png') }}" alt="location">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
            </div>
            <div class="our_contact_card d-flex flex-column col-3">
                <img src="{{ asset('img/phone.png') }}" alt="phone">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
            </div>
            <div class="our_contact_card d-flex flex-column col-3">
                <img src="{{ asset('img/mail.png') }}" alt="mail">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
            </div>
        </div>
    </div>
</section>
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
                        <a href="{{ app()->getLocale() == 'en' ? 'javascript:void(0)' : asset('locale/en') }}" class="lang"><img src="{{ asset('img/united-kingdom.png') }}" alt="uk"> English</a>
                        <a href="{{ app()->getLocale() == 'ru' ? 'javascript:void(0)' : asset('locale/ru') }}" class="lang"><img src="{{ asset('img/russia.png') }}" alt="russia"> Russia</a>
                        <a href="{{ app()->getLocale() == 'am' ? 'javascript:void(0)' : asset('locale/am') }}" class="lang"><img src="{{ asset('img/armenia.png') }}" alt="armenia"> Armenia</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
@endsection
@section('scripts')
<script>
    $('.product-carousel').owlCarousel({
        loop:false,
        margin:10,
        nav:true,
        dots:false,
        rewind: true,
        navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })

</script>
@endsection

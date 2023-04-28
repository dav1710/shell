@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
<section class="slider_section" id="home">
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
<section class="our_services_section mt-4" id="services">
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

<section id="our_shop">
    <div class="container our_shop">
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
    </div>
</section>

<section id="about">
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

<section class="contact mt-4" id="contact">
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

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
<section class="our_services_section mt-4">
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
<section>
    <div class="container our_shop">
        <div id="carouselExampleControls" class="carousel slide our_shop_slider" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="cards-wrapper">
                    <div class="card">
                      <img src="{{ asset('img/card_bg.png') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="price">900 AMD</p>
                      </div>
                    </div>
                    <div class="card">
                      <img src="{{ asset('img/card_bg.png') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="price">900 AMD</p>
                      </div>
                    </div>
                    <div class="card">
                      <img src="{{ asset('img/card_bg.png') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="price">900 AMD</p>
                      </div>
                    </div>
                    <div class="card">
                      <img src="{{ asset('img/card_bg.png') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="price">900 AMD</p>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="carousel-item">
                 <div class="cards-wrapper">
                    <div class="card">
                      <img src="{{ asset('img/card_bg.png') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="price">900 AMD</p>
                      </div>
                    </div>
                    <div class="card">
                      <img src="{{ asset('img/card_bg.png') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="price">900 AMD</p>
                      </div>
                    </div>
                    <div class="card">
                      <img src="{{ asset('img/card_bg.png') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="price">900 AMD</p>
                      </div>
                    </div>
                    <div class="card">
                      <img src="{{ asset('img/card_bg.png') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="price">900 AMD</p>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="carousel-item">
                 <div class="cards-wrapper">
                    <div class="card">
                      <img src="{{ asset('img/card_bg.png') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="price">900 AMD</p>
                      </div>
                    </div>
                    <div class="card">
                      <img src="{{ asset('img/card_bg.png') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="price">900 AMD</p>
                      </div>
                    </div>
                    <div class="card">
                      <img src="{{ asset('img/card_bg.png') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="price">900 AMD</p>
                      </div>
                    </div>
                    <div class="card">
                      <img src="{{ asset('img/card_bg.png') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="price">900 AMD</p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
          </div>
    </div>
</section>
  @endsection

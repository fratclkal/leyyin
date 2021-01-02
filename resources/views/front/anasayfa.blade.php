@extends('front.index')
@section('content')
    <div class="slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('front/media/slider.jpeg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('front/media/slider2.jpeg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('front/media/slider3.jpeg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>

    <div class="infos">
        <div class="number">
            <h5><i class="fas fa-phone"></i> 530 000 00 00</h5>
        </div>
        <div class="slogan">
            <h4>Adı gibi,<span class="typing"></span></h4>
        </div>
        <div class="mail">
            <h5><i class="far fa-envelope"></i>test@gmail.com</h5>
        </div>
    </div>

    <div class="map-swiper">
        <div class="swiper">
            <h4>Popüler Ürünlerimiz</h4>
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><a href="#"><img style="height: 220px;" id="slider-img" src="{{asset('front/media/dispanser.jpeg')}}" alt=""></a></div>
                    <div class="swiper-slide"><a href="#"><img style="height: 220px;" id="slider-img" src="{{asset('front/media/dispanser.jpeg')}}" alt=""></a></div>
                    <div class="swiper-slide"><a href="#"><img style="height: 220px;" id="slider-img" src="{{asset('front/media/dispanser.jpeg')}}" alt=""></a></div>
                    <div class="swiper-slide"><a href="#"><img style="height: 220px;" id="slider-img" src="{{asset('front/media/dispanser.jpeg')}}" alt=""></a></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>

        <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.7220771745615!2d41.159968303139934!3d37.88812535840477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400b46d357ed9bc7%3A0x56b60db9185574ad!2s%C3%87aml%C4%B1tepe%2C%20110.%20Cd.%20No%3A25%2C%2072070%20Batman%20Merkez%2FBatman!5e0!3m2!1str!2str!4v1609102747506!5m2!1str!2str" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </div>
@endsection

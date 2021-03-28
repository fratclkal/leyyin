<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leyyin</title>
    <link rel="stylesheet" href="{{asset('front/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('/front/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/corporate.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/products.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/product-detail.css')}}">

    <!-- swipper --->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../package/swiper-bundle.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>
<body>
<button href="javascript:" onclick="open_menu()" id="open-menu-button">&#9776</button>
<div id="mobile-menu">
    <ul>
        <li><a href="{{route('sliderdeneme')}}"><label><i class="fas fa-home" ></i>ANA SAYFA</label></a></li>
        <li><a href="{{route('urun')}}"><label><i class="fab fa-buffer" ></i>ÜRÜNLER </label></a></li>
        <li><a href="{{route('kurumsal')}}"><label ><i class="far fa-building" ></i>KURUMSAL</label></a></li>
        <li><a href="{{route('iletisimler')}}"><label ><i class="far fa-address-card" ></i>İLETİŞİM</label></a></li>
    </ul>
    <button href="javascript:" onclick="close_menu()" id="close-menu-button">&times;</button>
</div>

<div class="altern-body">
    <header>
        <div class="mobile-logo"><a href="{{route('sliderdeneme')}}"><img src="{{asset('front/media/logoo.png')}}" alt=""></a></div>
        <ul id="desktop-menu">
            <li><a href="{{route('sliderdeneme')}}"> <i class="fas fa-home" ></i> ANA SAYFA</a></li>
            <li><a href="{{route('urun')}}"><i class="fab fa-buffer"></i>ÜRÜNLER</a>
                <ul>
                    @foreach($product = App\Models\Product::all() -> where('is_deleted',0) as $products)
                    <li><a href="{{route('detay',$products -> id)}}">{{$products -> title}}</a></li>
                    @endforeach
                </ul>
            </li>
            <a href="{{route('sliderdeneme')}}"><img id="logo" src="{{asset('front/media/logoo.png')}}" alt=""></a>
            <li><a href="{{route('kurumsal')}}"><i class="far fa-building"></i>KURUMSAL</a></li>
            <li><a href="{{route('iletisimler')}}"><i class="far fa-address-card"></i>İLETİŞİM</a></li>
        </ul>
    </header>

    @yield('content')

    <footer>
        <h5>Copyright © 1999 - 2021 ÇÖZÜM KAĞIT</h5>
        <p>by firatcelkal@gmail.com</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script> <!-- Typed CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Slogan-->
    <script>
        var typed = new Typed('.typing', {
            strings: [' yumuşak...'],
            typeSpeed: 150,
            backSpeed: 80,
            backDelay: 1000,
            startDelay: 500,
            loop: true
        });
    </script>

    <!-- mobile menu functions-->
    <script type="text/javascript">
        function open_menu(){
            $('#mobile-menu').addClass('mobile-menu-active');
        }
    </script>

    <script>
        function close_menu(){
            $('#mobile-menu').removeClass('mobile-menu-active');
        }
    </script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script src="../package/swiper-bundle.min.js"></script>


    <!-- swipper --->

    <script>
        var appendNumber = 4;
        var prependNumber = 1;
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            centeredSlides: true,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
        document.querySelector('.prepend-2-slides').addEventListener('click', function (e) {
            e.preventDefault();
            swiper.prependSlide([
                '<div class="swiper-slide">Slide ' + (--prependNumber) + '</div>',
                '<div class="swiper-slide">Slide ' + (--prependNumber) + '</div>'
            ]);
        });
        document.querySelector('.prepend-slide').addEventListener('click', function (e) {
            e.preventDefault();
            swiper.prependSlide('<div class="swiper-slide">Slide ' + (--prependNumber) + '</div>');
        });
        document.querySelector('.append-slide').addEventListener('click', function (e) {
            e.preventDefault();
            swiper.appendSlide('<div class="swiper-slide">Slide ' + (++appendNumber) + '</div>');
        });
        document.querySelector('.append-2-slides').addEventListener('click', function (e) {
            e.preventDefault();
            swiper.appendSlide([
                '<div class="swiper-slide">Slide ' + (++appendNumber) + '</div>',
                '<div class="swiper-slide">Slide ' + (++appendNumber) + '</div>'
            ]);
        });
    </script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../package/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>

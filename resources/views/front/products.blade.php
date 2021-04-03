@extends('front.index')
@section('content')

    <div class="mobile-banner">
        <h1 style="color: black" class="title">Ürünlerimiz</h1>
        <img src="{{ asset('front/media/product-banner.png') }}" alt="">
    </div>

    <section>
        <div class="products">

            @foreach($product as $products)
            <a href="{{route('detay',$products -> id)}}"><img src="{{asset('/urunler/'. $products -> path)}}" alt=""></a>
            @endforeach

        </div>
    </section>

    @endsection

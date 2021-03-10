@extends('front.index')
@section('content')

    <div class="products-banner">
    </div>

    <section>
        <div class="products">

            @foreach($product as $products)
            <a href="{{route('detay',$products -> id)}}"><img src="{{asset('/urunler/'. $products -> path)}}" alt=""></a>
            @endforeach

        </div>
    </section>

    @endsection

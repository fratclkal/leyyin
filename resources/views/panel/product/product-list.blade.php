@extends('panel.admin-panel')
@section('css')
    <style>
        .box{ height: auto; width: 70%;  margin: 5% 0 0 25%;}
        .box:hover{opacity: 1;}
        h3{color: black; text-align: center; font:30px bold Tahoma;}
        p{color: #000000; font: 19px bold Tahoma;}
        span{color: black; font: 20px bold Tahoma;}
        h4{text-align: center; color: red; font: 29px bold Tahoma;}
        button{background: #4dd0e1;}

    </style>
@endsection
@section('product-list')
    <div class="box">

        <h3>Ürünler</h3>
        <br>
        <a href="{{route('product')}}"><button>Ürün Ekle</button></a>
        <hr><br>
        @foreach($product as $products)
            <ul>
                <h4>{{$products -> title}}</h4>
                <li>
                    <img src="{{asset('/urunler/'.$products -> path)}}" alt="" style="height: 200px; width: 200px;">
                    <span style=" margin: 0 0 0 10%;">{!! $products -> content !!}</span>
                </li>
            </ul>
            <a style="margin: 0 0 0 75%;" href="{{route('product-update',$products -> id)}}"><button>Güncelle</button></a>
            <a href="{{route('product-delete', $products -> id)}}"><button style="background: red;" type="submit">SİL</button></a>
            <hr>
        @endforeach

    </div>

@endsection

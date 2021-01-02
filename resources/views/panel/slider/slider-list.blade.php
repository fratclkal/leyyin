@extends('panel.admin-panel')
@section('css')
    <style>
        .box{ height: auto; width: 70%;  margin: 5% 0 0 25%;}
        .box:hover{opacity: 1;}
        h3{color: black; text-align: center; font:30px bold Tahoma;}
        p{color: #000000; font: 19px bold Tahoma;}
        span{color: black; font: 20px bold Tahoma;}
        h4{text-align: center; color: red; font: 40px bold Tahoma;}
        button{background: #4dd0e1;}
        img{height: 200px; width: 200px;}
    </style>
@endsection
@section('slider-list')
    <div class="box">
        <h3>Slider Bilgileri</h3>
        <a style="margin: 0 0 0 80%;" href="{{route('slider')}}"><button type="submit">Slider Ekle</button></a>
        <hr>

        <table>
            @foreach($slider as $sliders)
                <li>
                    <img src="{{asset('/slider/'.$sliders -> path)}}" alt="">
                    <a style="margin: 0 0 0 50%;" href="{{route('slider-update',$sliders -> id)}}"><button type="submit">GÜNCELLE</button></a>
                    <a href="{{route('slider-delete',$sliders -> id)}}"><button style="background: red;" type="submit">SİL</button></a>
                    <hr>
                </li>
            @endforeach
        </table>
        <br>
        <br>

        <br>
        <br>
        <br>
    </div>
@endsection

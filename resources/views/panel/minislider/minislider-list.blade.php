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
@section('minislider-list')
    <div class="box">
        <h3>MiniSlider Liste</h3>
        <a style="margin: 0 0 0 80%;" href="{{route('minislider')}}"><button type="submit">Ekle</button></a>
        <hr>

        <table>
            @foreach($minislider as $minisliders)
                <span><h3>{{$minisliders -> title}}</h3></span>
                <li>
                    <img src="{{asset('/miniSlider/'.$minisliders -> path)}}" alt="">
                    <a style="margin: 0 0 0 50%;" href="{{route('minislider-update',$minisliders -> id)}}"><button type="submit">GÜNCELLE</button></a>
                    <a href="{{route('minislider-delete',$minisliders -> id)}}"><button style="background: red;" type="submit">SİL</button></a>
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

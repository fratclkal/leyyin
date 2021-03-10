@extends('panel.admin-panel')
@section('css')
    <style>
        .box{ height: auto; width: 70%;  margin: 5% 0 0 25%;}
        .box:hover{opacity: 1;}
        h3{color: black; text-align: center; font:30px bold Tahoma;}
        p{color: #000000; font: 19px bold Tahoma;}
        span{color: black; font: 20px bold Tahoma;}
        h4{text-align: center; color: red; font: 40px bold Tahoma;}
        button{background: #4dd0e1; margin: 2% 0 0 70%;}
        img{height: 200px; width: 200px;}
    </style>
@endsection
@section('minislider-update')
    <div class="box">
        <h3>Slider Güncelle<hr></h3>
        <br>
        <form action="{{route('minislider-update', $minislider -> id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title">
            <li>
                <img src="{{asset('/miniSlider/'.$minislider -> path)}}" alt="">
                <span>&nbsp; Yeni MiniSlider: &nbsp;&nbsp;</span>
                <input type="file" name="path">
            </li>
            <button type="submit">GÜNCELLE</button>
            <br>

        </form>

    </div>
@endsection

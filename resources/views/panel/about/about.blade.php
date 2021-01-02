@extends('panel.admin-panel')
@section('css')
    <style>
        .box{ height: auto; width: 70%;  margin: 5% 0 0 25%;}
        .box:hover{opacity: 1;}
        h3{color: black; text-align: center; font:30px bold Tahoma;}
        p{color: #000000; font: 19px bold Tahoma;}
        span{color: black; font: 20px bold Tahoma;}
        h4{text-align: center; color: red; font: 40px bold Tahoma;}
        button{background: #4dd0e1; margin: 2% 0 0 0;}
    </style>
@endsection
@section('about')
    <div class="box">
        <h3>Hakkımızda Ekle<hr></h3>
        <br>
        <form action="{{route('about')}}" method="POST">
            @csrf
            <span>Başlık <br></span>
            <textarea name="title" id="" cols="30" rows="2" required></textarea><br>
            <span>İçerik <br></span>
            <textarea name="content" id="" cols="85" rows="20" required></textarea>

            <button type="submit">Yazıyı Ekle</button>
        </form>
        <br>
    </div>
@endsection

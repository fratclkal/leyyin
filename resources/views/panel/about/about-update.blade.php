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
@section('about-update')
    <div class="box">
        <h3>Hakkımızda Güncelleme<hr><br></h3>
        <div class="update">
            <form action="{{route('about-update', $about -> id)}}" method="POST">
                @csrf
                <span>Başlık: &nbsp; </span><br><textarea name="title" id="" cols="30" rows="2">{{$about -> title}}</textarea><br><br>
                <span>İçerik: &nbsp; </span><br><textarea name="content" id="" cols="85" rows="20">{{$about -> content}}</textarea>
                <button type="submit">Güncelle</button>
                <br><br>
            </form>
        </div>
    </div>
@endsection

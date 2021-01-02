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
    </style>
@endsection
@section('menu-list')

<div class="box">
    <h3><br>Menüler</h3>
    <a style="margin: 0 0 0 75%;" href="{{route('menu')}}"><button style="background: #76ff03 ">MENÜ EKLE</button></a>
    <hr>

    @foreach($menu as $menus)
        <span style="font: 25px bold Tahoma;"><u>Menü İsmi</u></span><br><br>
        <li><span>{{$menus -> title}}</span></li>
        <a style="margin: 0 0 0 75%;" href="{{route('update',$menus -> id)}}"><button type="submit">GÜNCELLE</button></a>
        <a href="{{route('delete',$menus -> id)}}"><button style="background: red;" type="submit">SİL</button></a>
        <hr>
    @endforeach



</div>
@endsection

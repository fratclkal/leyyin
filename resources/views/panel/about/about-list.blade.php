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
@section('about-list')
    <div class="box">
        <div class="list">
            <br>
            <h3>Hakkımızda</h3>
            <hr>
            @foreach($about as $abouts)
            <h4>{{$abouts -> title}}</h4>
                <p>{{$abouts -> content}}</p>
                <a href="{{route('about-update',$abouts -> id)}}"><button>Güncelle</button></a>
                <hr>
            @endforeach

        </div>
        <br><br>
    </div>
@endsection

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
    </style>
@endsection
@section('slider')
    <div class="box">
        <h3>Slider<hr></h3>
        <br>
        <form action="{{route('slider')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <span>Slider</span>
            <input style="margin: 0 0 0 3%;" type="file" name="path" required> <br>
            <button type="submit">Slider Ekle</button>
        </form>
    </div>
@endsection

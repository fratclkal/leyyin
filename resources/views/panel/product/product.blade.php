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
@section('product')
    <div class="box">
        <center>
        <h3>Ürün Oluşturma<hr></h3><br>
        <form action="{{route('product')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <span>Ürün Adı</span><br>
            <textarea name="title" id="" cols="20" rows="2" placeholder="Başlık" required></textarea><br><br>
            <span>Ürün Özellikleri</span><br>
            <textarea name="content" id="" cols="30" rows="10" placeholder="Ürün Özelliği" required></textarea><br><br>
            <span>Ürün Fotoğrafı</span><br>
            <input type="file" name="path" required><br>
            <button type="submit">Ürünü Ekle</button>
        </form>
        </center>
    </div>
@endsection

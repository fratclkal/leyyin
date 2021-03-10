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
@section('product-update')
    <div class="box">
        <center>
            <h3>Ürün Güncelleme<hr></h3><br>
            <form action="{{route('product-update',$product -> id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <span>Ürün Adı</span><br>
                <textarea name="title" id="" cols="20" rows="2">{{$product -> title}}</textarea><br><br>
                <span>Ürün Özellikleri</span><br>
                <textarea name="content" id="content" cols="30" rows="10">{!! $product -> content !!}</textarea><br><br>
                <span>Popüler</span><br>
                <select style="width: 20%;" name="is_popular" id="">
                    <option value="1">Popüler Ürün</option>
                    <option value="0">Popüler Değil</option>
                </select><br><br>
                <span>Ürün Fotoğrafı</span><br><br>
                <img src="{{asset('/urunler/'.$product -> path)}}" style="width: 200px; height: 200px;"><br><br>
                <input type="file" name="path"><br>
                <button type="submit">Ürünü Güncelle</button>
                <br>
            </form>
        </center>
        <br>
    </div>

    <script>
        CKEDITOR.replace('content');
    </script>
@endsection

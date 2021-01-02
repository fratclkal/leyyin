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
@section('contact-update')
    <div class="box">
        <h3>Bilgileri Güncelle<hr></h3>
        <br>
        <form action="{{route('update-contact', $contact -> id)}}" method="POST">
            @csrf
            <table>
                <tr>
                    <td>Telefon Numarası: </td>
                    <td><input type="text" name="tel_no" value="{{$contact -> tel_no}}"></td>
                </tr>
                <tr>
                    <td>E-Mail: </td>
                    <td><input type="text" name="email" value="{{$contact -> email}}"></td>
                </tr>
            </table>
            <br>
            <span>Adres: </span><br>
            <textarea name="address" id="" cols="30" rows="10">{{$contact -> address}}</textarea>
            <br>
            <button style="margin: 0 10% 0 73%; border-radius: 30px; background:#c51162; color: white" type="submit">Güncelle</button>
        </form>
    </div>
@endsection


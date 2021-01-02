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
@section('contact-list')
    <div class="box">
        <h3>İletişim Bilgileri<hr></h3>
        <br>
        <table border="1">
            @foreach($contact as $contacts)
            <tr>
                <td style="color: black; font: 22px bold Tahoma;">&nbsp; Telefon No: </td>
                <td style="color: black; font: 20px bold Tahoma;">{{$contacts -> tel_no}}</td>
            </tr>
                <tr>
                    <td style="color: black; font: 25px bold Tahoma;">&nbsp; E-mail: </td>
                    <td style="color: black; font: 20px bold Tahoma;">{{$contacts -> email}}</td>
                </tr>
                <tr>
                    <td style="color: black; font: 25px bold Tahoma;">&nbsp; Adres: </td>
                    <td style="color: black; font: 20px bold Tahoma;">{{$contacts -> address}}</td>
                </tr>
            @endforeach
        </table>
        <br>
        <hr>
        <td><a href="{{route('update-contact', $contacts -> id)}}"><button style="background: #00cae3; color:#040505;">GÜNCELLE</button></a></td>
    </div>


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
@section('contact')
    <div class="box">
        <h3><br>İletişim</h3>
        <hr>
        <form action="{{route('contact')}}" method="POST">
            @csrf

            <table>
            <tr>
                <td style="color: black; font: 20px bold Tahoma;">Telefon Numarası:</td>
                <td><input style="width: 200%;" type="text" name="tel_no" placeholder="Numara" required></td>
            </tr>
            <tr>
                <td style="color: black; font: 20px bold Tahoma;">E-mail: </td>
                <td><input style="width: 200%;" type="email" name="email" placeholder="E-mail" required></td>
            </tr>
            </table>
            <br>
            <span>Adres </span><br>
            <textarea name="address" id="" cols="30" rows="10" placeholder="Adres" required></textarea>
            <br>
            <button style="margin: 0 10% 0 82%; border-radius: 30px; background:#76ff03; color: black" type="submit">Ekle</button>
        </form>
    </div>
@endsection

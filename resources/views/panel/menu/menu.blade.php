@extends('panel.admin-panel')
@section('css')
 <style>
     .box{ height: auto; width: 70%;  margin: 5% 0 0 25%;}
     .box:hover{opacity: 1;}
     h3{color: black; text-align: center; font:30px bold Tahoma;}
     p{color: #000000; font: 19px bold Tahoma;}
     span{color: black; font: 20px bold Tahoma;}
     h4{text-align: center; color: red; font: 40px bold Tahoma;}
     button{background: #4dd0e1; margin: 2% 0 0 75%;}
</style>
@endsection
@section('menu')

<div class="box">
    <h3>Menü Ekle <hr></h3>
    <br>
    <form action="{{route('menu')}}" method="POST">
        @csrf
    <table>
        <tr><br><br>
            <td style="color: black; font: 20px bold Tahoma;">&nbsp; Menü İsmi: &nbsp;&nbsp;</td>
            <td><input style="width: 200%;" type="text" name="title" placeholder="Başlık" required></td>
        </tr>
    </table>
    <br>
        <button type="submit">EKLE</button>
    </form>
</div>

@endsection

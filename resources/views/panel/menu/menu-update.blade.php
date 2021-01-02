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
@section('menu-update')

    <div class="box">
        <h3>Menü Güncelle<hr></h3>
        <form action="{{route('update', $menu -> id)}}" method="POST">
            @csrf
            <table>
                <tr><br><br>
                    <td style="color: black; font: 20px bold Tahoma;"> Menü İsmi: </td>
                    <td><input style="width: 200%;" type="text" name="title" value="{{$menu -> title}}"></td>
                </tr>
            </table>
            <br>
            <button style="margin: 0 10% 0 73%; border-radius: 30px; background:#c51162; color: white" type="submit">Güncelle</button>
        </form>
    </div>

@endsection

@extends('front.index')
@section('content')

    <section>
        <div class="content">
            <img src="{{asset('/urunler/'.$product -> path)}}" alt="">
            <div class="details">
                <h5>{{$product -> title}}</h5>
                <table>

                    <tr><th>{{$product -> content}}</th></tr>

                </table>
            </div>
        </div>
    </section>

@endsection

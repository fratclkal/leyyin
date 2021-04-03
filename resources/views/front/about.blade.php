@extends('front.index')
@section('content')


    <div class="mobile-banner">
        <h1 class="title">Hakkımızda</h1>
        <img src="{{ asset('front/media/about-banner.png') }}" alt="">
    </div>

    <section>

        <div class="content">
            @foreach($about as $abouts)
            <h4>{{$abouts -> title}}</h4>
            <h5>{!!$abouts -> content!!}</h5>
            @endforeach
        </div>

    </section>

@endsection

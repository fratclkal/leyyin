@extends('front.index')
@section('content')

    <div class="about-banner">
        <h3>Hakkımızda</h3>
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

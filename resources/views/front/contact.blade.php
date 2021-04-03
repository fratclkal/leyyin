@extends('front.index')
@section('content')

    <div style="justify-content: start" class="mobile-banner contact-banner">
        <h1 class="contact-title" class="title">İletişim</h1>
        <img src="{{ asset('front/media/contact-us.jpg') }}" alt="">
    </div>

    <section>
        <div class="content">
            @foreach($contact as $contacts)
            <div class="contact">
                <h5>Telefon No:</h5>
                <h6>{{$contacts -> tel_no}}</h6>
                <h5>E-mail:</h5>
                <h6>{{$contacts -> email}}</h6>
                <h5>Adres:</h5>
                <h6>{{$contacts -> address}}</h6>
            </div>
            @endforeach
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.7220771745615!2d41.159968303139934!3d37.88812535840477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400b46d357ed9bc7%3A0x56b60db9185574ad!2s%C3%87aml%C4%B1tepe%2C%20110.%20Cd.%20No%3A25%2C%2072070%20Batman%20Merkez%2FBatman!5e0!3m2!1str!2str!4v1609102747506!5m2!1str!2str" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>
        </div>
    </section>

@endsection

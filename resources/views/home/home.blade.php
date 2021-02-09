@extends('home.master')


@section('content')

<div class="hero">

    <div class="content-red-social">
        <div class="box-red-social">
            <img src="{{ asset('assets/img/static/icons/instagram.png') }}" alt="" class="icon-red-social">
        </div>
        <div class="box-red-social">
            <img src="{{ asset('assets/img/static/icons/facebook.png') }}" alt="" class="icon-red-social">
        </div>
    </div>

    <div class="content-quote">

        <div class="box-quote">
            <div class="sub-box-quote">
                <div class="mini-box">
                    <div class="btn-quote">
                        <span class="txtwhite">Vender Oro</span>
                        <img src="{{ asset('assets/img/static/icons/dollar.svg') }}" alt="">
                    </div>
                    <div class="btn-quote">
                        <span class="txtredwine">Cotizá Online</span>
                        <img src="{{ asset('assets/img/static/icons/calculator.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="content-banner">
            <div class="banner">
                <div class="box-banner">
                    <img src="{{ asset('assets/img/static/rings/allianz.png') }}" alt="">

                </div>
                <div class="banner-text">
                    <div class="content-text">
                        <span class="txtredwine">Pagamos oro 18k</span>
                    </div>
                    <div class="content-text">
                        <span class="txtredwine"><strong>Hasta $13900</strong></span>
                    </div>
                    <div class="content-text">
                        <span class="txtredwine"><strong>oro 24k</strong> hasta</span>
                    </div>
                    <div class="content-text">
                        <span class="txtredwine"><strong>$20000</strong> el gramo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="first-title">
    <h1><span class="txtwhite">¿Que</span> <span class="txtgold">compramos?</span></h1>
</div>

<div class="content-buy-boxes">
    <div class="buy-boxes">
        <img src="{{ asset('assets/img/static/manikin/neckleacle-one.png') }}" alt="">
        <span>Cadena de oro Puro</span>
    </div>
    <div class="buy-boxes">
        <img src="{{ asset('assets/img/static/manikin/neckleacle-three.png') }}" alt="">
        <span>Cadena de oro Fino</span>
    </div>
    <div class="buy-boxes">
        <img src="{{ asset('assets/img/static/rolex/omega.png') }}" alt="">
        <span>Omega</span>
    </div>
    <div class="buy-boxes">
        <img src="{{ asset('assets/img/static/rolex/rolex-daytona.png') }}" alt="">
        <span>Rolex Daytona</span>
    </div>
    <div class="buy-boxes">
        <img src="{{ asset('assets/img/static/rolex/rolex-sea-dweller.png') }}" alt="">
        <span>Rolex Sea Dweller</span>
    </div>
    <div class="buy-boxes">
        <img src="{{ asset('assets/img/static/rolex/rolex-submariner.png') }}" alt="">
        <span>Rolex Submariner</span>
    </div>
    <div class="buy-boxes">
        <img src="{{ asset('assets/img/static/rings/ring-one.png') }}" alt="">
        <span>Anillo de oro</span>
    </div>
    <div class="buy-boxes">
        <img src="{{ asset('assets/img/static/rings/ring-two.png') }}" alt="">
        <span>Alianzas de oro</span>
    </div>

</div>








{{-- aca incluyo el formulario --}}
@include('home.form_quote')
@endsection
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


    <div class="main-quote-desktop">
        <div class="content-quote-desktop">
            <img src="{{ asset('assets/img/static/logo-1.png') }}" alt="">
            <img src="{{ asset('assets/img/static/manikin/stand-necklace.png') }}" alt="">
        </div>
        <div class="content-quote-desktop">
            <div class="content-text-desktop font-big-30">
                <span class="txtwhite">Compramos su oro al precio</span> <span class="txtgold">mas alto de
                    argentina</span>
            </div>
            <div class="content-text-desktop font-normal-19 ">
                <span class="txtwhite">Pagamos el <span class="txtgold"> oro </span> hasta $13000 pesos el gramo,<span
                        class="txtgold"> brillantes </span> hasta USD 19.000 dolares el kilate
            </div>
            <div class="content-text-desktop font-normal-17 txtGrayLight">
                Obtenga dinero al instante por sus pertenencias. Tasamos y lo asesoramos en la compra de sus
                alhajas,
                joyas, diamantes, antiguedades y relojes
            </div>

            <div class="main-content-btn">
                <div class="btn-main-desktop bgredwine">
                    <span class="txtwhite"><strong>Vender Oro</strong></span>
                    <img src="{{ asset('assets/img/static/icons/dollar.svg') }}" alt="">
                </div>
                <div class="btn-main-desktop bgyellow">
                    <span class="txtwhite"><strong>Cotizar ahora!</strong></span>
                    <img src="{{ asset('assets/img/static/icons/calculator.svg') }}" alt="">
                </div>
            </div>

        </div>
    </div>

    {{-- movil desing hero--}}

    <div class="content-quote">

        <div class="box-quote">
            <div class="sub-box-quote">
                <div class="mini-box">
                    <div class="btn-quote">
                        <span class="txtwhite">Vender Oro</span>
                        <img src="{{ asset('assets/img/static/icons/dollar.svg') }}" alt="">
                    </div>
                    <div class="btn-quote">
                        <span class="txtredwine">Cotizár ahora</span>
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
    {{-- end movil desing hero --}}

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
    <div class="buy-boxes">
        <img src="{{ asset('assets/img/static/ingot/international.png') }}" alt="">
        <span>Lingote Internacional</span>
    </div>
    <div class="buy-boxes">
        <img src="{{ asset('assets/img/static/ingot/national.png') }}" alt="">
        <span>Lingote Nacional</span>
    </div>
    <div class="buy-boxes">
        <img src="{{ asset('assets/img/static/diamond/yellow.png') }}" alt="">
        <span>Diamante Radiante</span>
    </div>
    <div class="buy-boxes">
        <img src="{{ asset('assets/img/static/diamond/ovalado.png') }}" alt="">
        <span>Diamante ovalado</span>
    </div>
    <div class="buy-boxes">
        <img src="{{ asset('assets/img/static/money/money-classic.png') }}" alt="">
        <span>Diamante Radiante</span>
    </div>
    <div class="buy-boxes">
        <img src="{{ asset('assets/img/static/money/old-money.png') }}" alt="">
        <span>Diamante ovalado</span>
    </div>

</div>

<div class="second-title">
    <h4>¿Necesita vender oro, joyas o antigüedades?</h4>
</div>

<div class="main-content-information">

    <div class="box-information">
        <p>Compramos <span class="txtgold">oro</span>, joyas, diamantes, alhajas, brillantes, relojes, monedas y
            antigüedades.
            ¡Tenemos la mejor cotización del mercado! Utilice el formulario a continuación para
            tasar sus pertenencias.
        </p>
    </div>
    <div class="box-information ">
        <img src="{{ asset('assets/img/static/manikin/unnamed.png') }}" alt="">
    </div>

</div>


<div class="three-title">
    <h5>Cotización Online</h5>
</div>

{{-- aca incluyo el formulario --}}
@include('home.form_quote')


<div class="four-title">
    <h6>Nuestros operadores estan atentos a tu cotización</h6>
</div>

<div class="five-title">
    <span>Contacto</span>
</div>

<div class="content-contact">
    <div class="box-contact">

        <div class="icon">
            <img src="{{ asset('assets/img/static/icons/pin.png') }}" alt="">
        </div>
        <div class="contact-text">
            <div class="text-contact-info">
                <span class="main-text">Av. Rivadavia 1600, Centro</span>
            </div>
            <div class="text-contact-info">
                <span class="children-main">CABA - Argentina</span>
            </div>
        </div>

    </div>

    <div class="box-contact">
        <div class="icon">
            <img src="{{ asset('assets/img/static/icons/phone.png') }}" alt="">
        </div>
        <div class="contact-text">
            <div class="text-contact-info">
                <span class="main-text">Internacional:</span><span class="textLight"> +54 11 5113-7451 </span>
            </div>
            <div class="text-contact-info">
                <span class="main-text">Argentina</span><span class="textLight"> +54 11 6351-5316 </span>
            </div>
        </div>
    </div>


    <div class="box-contact">
        <div class="icon">
            <img src="{{ asset('assets/img/static/icons/enveloper.png') }}" alt="">
        </div>
        <div class="contact-text">
            <div class="text-contact-info">
                <span class="main-text">contacto@rivasjoyas.com</span>
            </div>
        </div>
    </div>


    <div class="box-contact">
        <div class="icon">
            <img src="{{ asset('assets/img/static/icons/clock.png') }}" alt="">
        </div>
        <div class="contact-text">
            <div class="text-contact-info">
                <span class="main-text">Lun / Vie 9:00 a 18:00 hs</span>
            </div>
        </div>
    </div>

    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.802859269606!2d-58.39123068519505!3d-34.609146265291514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccac3577486e5%3A0xe4b3f2dd6f2207f9!2sRivadavia%201600%2C%20C1077%20CABA!5e0!3m2!1ses-419!2sar!4v1612919473531!5m2!1ses-419!2sar"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0">
        </iframe>
    </div>

</div>

<div class="footer">
    <div class="box-footer">
        <img class="img-logo" src="{{ asset('assets/img/static/logo.png') }}" alt="">
    </div>
    <div class="box-footer">
        <span>Todos los derechos reservados - Rivas Joyas 2021</span>
    </div>
    <div class="box-footer">
        <div class="img-footer">
            <img class="img-footer-red" src="{{ asset('assets/img/static/icons/instagram.png') }}" alt="">
            <img class="img-footer-red" src="{{ asset('assets/img/static/icons/facebook.png') }}" alt="">
        </div>
    </div>
</div>

@endsection
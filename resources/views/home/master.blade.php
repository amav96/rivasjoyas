<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') - Rivas Joyas</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="routeName" content="{{ URL::to('/statistic') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/static/manikin/neckleacle-three.png') }}">
    <link rel="stylesheet" href="{{ url('assets/css/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</head>

<body>

    <div class="navbar fixed-top" id="navbar">
        <div class="navbar-section">

            <div class="sub-navbar logo">
                <img src="{{ asset('assets/img/static/logo-3.png') }}" alt="">
            </div>

        </div>

        <div class="navbar-section nav-sm">
            <div class="sub-navbar bars" id="show-menu">
                <i class="fas fa-bars"></i>
            </div>

        </div>

        <div class="navbar-section nav-lg">

            <div class="box-nav-bar">
                <div class="sub-box-nav">
                    <img src="{{ asset('assets/img/static/icons/money.png') }}" alt="">
                </div>
                <div class="sub-box-nav" id="buy-side-desktop">
                    <span>Que compramos</span>
                </div>

            </div>
            <div class="box-nav-bar">
                <div class="sub-box-nav">
                    <img src="{{ asset('assets/img/static/icons/rolex.png') }}" alt="">
                </div>
                <div class="sub-box-nav" id="buy-role-desktop">
                    <span>Rolex</span>
                </div>
            </div>
            <div class="box-nav-bar">
                <div class="sub-box-nav">
                    <img src="{{ asset('assets/img/static/icons/diamante.png') }}" alt="">
                </div>
                <div class="sub-box-nav" id="buy-daimond-desktop">
                    <span>Diamantes</span>
                </div>
            </div>
            <div class="box-nav-bar">
                <div class="sub-box-nav">
                    <img src="{{ asset('assets/img/static/icons/phone-sm.png') }}" alt="">
                </div>
                <div class="sub-box-nav" id="go-contact-desktop">
                    <span>Contacto</span>
                </div>
            </div>

        </div>
    </div>

    <nav class="sidebar">
        <ul class="nav-menu-items">
            <div class="bar-lateral">
                <li>
                    <div class="menu-text" id="buy-side">
                        <span>Que compramos</span>
                        <img src="{{ asset('assets/img/static/icons/money.png') }}" alt="">
                    </div>
                </li>


                <li>
                    <div class="menu-text" id="buy-role">
                        <span>Rolex</span>
                        <img src="{{ asset('assets/img/static/icons/rolex.png') }}" alt="">
                    </div>
                </li>


                <li>
                    <div class="menu-text" id="buy-daimond">
                        <span>Diamantes</span>
                        <img src="{{ asset('assets/img/static/icons/diamante.png') }}" alt="">
                    </div>
                </li>


                <li>
                    <div class="menu-text" id="go-contact">
                        <span>Contacto</span>
                        <img src="{{ asset('assets/img/static/icons/phone-sm.png') }}" alt="">
                    </div>
                </li>
            </div>
        </ul>
    </nav>

    @section('content')


    @show

    {{-- aca deberia ir el footer --}}

    <script src="{{ asset('assets/js/quote/main.js') }}"> </script>
    <script src="{{ asset('assets/js/style/main.js') }}"> </script>


</body>

</html>
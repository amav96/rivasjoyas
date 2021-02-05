<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') - Rivas Joyas</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="routeName" content="{{ URL::to('/') }}">
    <link rel="stylesheet" href="{{ url('assets/css/main.css') }}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</head>

<body>

    <div class="navbar" id="navbar">
        <div class="navbar-section">

            <div class="sub-navbar logo">
                <img src="{{ asset('assets/img/static/logo-1.png') }}" alt="">
            </div>

        </div>

        <div class="navbar-section">
            <div class="sub-navbar bars">
                <i class="fas fa-bars"></i>
            </div>

        </div>

        <div class="navbar-section nav-lg">

            <div class="box-nav-bar">
                <i class="fas fa-user"></i>
                <span>Que compramos</span>
            </div>
            <div class="box-nav-bar">
                <i class="fas fa-user"></i>
                <span>Rolex</span>
            </div>
            <div class="box-nav-bar">
                <i class="fas fa-user"></i>
                <span>Diamantes</span>
            </div>
            <div class="box-nav-bar">
                <i class="fas fa-user"></i>
                <span>Contacto</span>
            </div>

        </div>

        {{-- <a href="" class="menu-bars" id="show-menu">
            <i class="fas fa-bars"></i>
        </a> --}}
    </div>

    <nav id="nav-menu">
        <ul class="nav-menu-items">

        </ul>
    </nav>

    @section('content')


    @show

    {{-- aca deberia ir el footer --}}

    <script src="{{ asset('assets/js/quote/main.js') }}"> </script>


</body>

</html>
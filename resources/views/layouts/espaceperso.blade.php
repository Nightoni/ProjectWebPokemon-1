<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>Le site de reference pour tous vos echanges de cartes</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('javascript')
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('css')
</head>
<body>
@csrf
<main class="py-4">
    <div id="header">
        <div class="top">
            <!-- Logo -->
            <div id="logo">
                <span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span>
                <h1 id="title">{{ Auth::user()->name }}</h1>
                <p>Compte classique</p>
            </div>
            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li><a href="{{ url('/persopok') }}" id="top-link"><span class="icon fa-th-list">Cartes Pokemon</span></a></li>
                    <li><a href="{{ url('/persoyugi') }}" id="portfolio-link"><span class="icon fa-th-list">Cartes YuGiOh</span></a></li>
                    <li><a href="{{ url('/persomagic') }}" id="about-link"><span class="icon fa-th-list">Cartes Magic</span></a></li>
                    <li><a href="{{ url('/persoff') }}" id="contact-link"><span class="icon fa-th-list">Cartes Final Fantasy</span></a></li>
                    <li><a href="{{ url('/persouser') }}" id="contact-link"><span class="icon fa-cog">Paramétres</span></a></li>
                </ul>
            </nav>
        </div>

        <div class="bottom">
            <!-- Social Icons -->
            <ul class="icons">
                <li><a href="{{ url('/') }}" class="icon fa-home"><span class="label">Accueil</span></a></li>
                <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
                <li><a href="#" class="icon fa-credit-card "><span class="label">Portefeuille</span></a></li>
            </ul>
        </div>
    </div>
    <!-- Main -->
    @yield('content')
</main>
</body>
</html>

@extends('layouts.espaceperso')
@section('pageTitle', 'Page Title')
@push('css')
<link href="{{ asset('css/mainperso.css') }}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
@endpush
@section('content')
<!-- Main -->
<div id="main">
    @csrf
    <!-- Intro -->
    <section id="title">
        <h2>POKEMON</h2>
    </section>
    <section id="top" class="pok dark cover">
        <div class="container">
            <header>
                <h2 class="alt"><br></h2>
            </header>
        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="two">
        <div class="container">

            <div class="row">
                <div class="col-4 col-12-mobile">
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/soleiletlune.jpg" alt="" /></a>
                        <header>
                            <h3>Soleil et Lune</h3>
                        </header>
                    </article>
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/heartgoldetsoulsilver.jpg" alt="" /></a>
                        <header>
                            <h3>Heartgold et Soulsilver</h3>
                        </header>
                    </article>
                </div>
                <div class="col-4 col-12-mobile">
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/xety.jpg" alt="" /></a>
                        <header>
                            <h3>X et Y</h3>
                        </header>
                    </article>
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/platine.jpg" alt="" /></a>
                        <header>
                            <h3>Platine</h3>
                        </header>
                    </article>
                </div>
                <div class="col-4 col-12-mobile">
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/noiretblanc.jpg" alt="" /></a>
                        <header>
                            <h3>Noir et Blanc</h3>
                        </header>
                    </article>
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/diamantetperle.jpg" alt="" /></a>
                        <header>
                            <h3>Diamant et Perle</h3>
                        </header>
                    </article>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
@endsection
@push('javascript')
<script src="{{asset('js/espaceperso/jquery.min.js') }}"></script>
<script src="{{asset('js/espaceperso/jquery.scrolly.min.js') }}"></script>
<script src="{{asset('js/espaceperso/jquery.scrollex.min.js') }}"></script>
<script src="{{asset('js/espaceperso/browser.min.js') }}"></script>
<script src="{{asset('js/espaceperso/breakpoints.min.js') }}"></script>
<script src="{{asset('js/espaceperso/util.js') }}"></script>
<script src="{{asset('js/espaceperso/main.js') }}"></script>
@endpush

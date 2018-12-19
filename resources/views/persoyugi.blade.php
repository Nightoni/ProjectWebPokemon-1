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
        <h2>YU GI OH</h2>
    </section>
    <section id="top" class="yugi dark cover">
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
                        <a href="#" class="image fit"><img src="images/duelist.jpg" alt="" /></a>
                        <header>
                            <h3>Duelist</h3>
                        </header>
                    </article>
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/exclusifs.jpg" alt="" /></a>
                        <header>
                            <h3>Exclusifs</h3>
                        </header>
                    </article>
                </div>
                <div class="col-4 col-12-mobile">
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/structure.jpg" alt="" /></a>
                        <header>
                            <h3>Structure Deck</h3>
                        </header>
                    </article>
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/reedit.jpg" alt="" /></a>
                        <header>
                            <h3>Rééditions</h3>
                        </header>
                    </article>
                </div>
                <div class="col-4 col-12-mobile">
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/tinsbox.jpg" alt="" /></a>
                        <header>
                            <h3>Tins Box</h3>
                        </header>
                    </article>
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/tournou.jpg" alt="" /></a>
                        <header>
                            <h3>Tournoi</h3>
                        </header>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-4 col-12-mobile">
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/starter.jpg" alt="" /></a>
                        <header>
                            <h3>Starter Deck</h3>
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

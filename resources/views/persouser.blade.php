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
        <h2>PARAMETRES</h2>
    </section>
    <section id="top" class="user dark cover">
        <div class="container">
            <header>
                <h2 class="alt"><br></h2>
            </header>
        </div>
    </section>
    <!-- Portfolio -->
    <!-- Contact -->
    <section id="contact" class="four">
        <div class="container">

            <header>
                <h2>Mes informations</h2>
            </header>

            <form method="post" action="#">
                <div class="row">
                    <div class="col-6 col-12-mobile"><input type="text" name="name" placeholder="Pseudo" /></div>
                    <div class="col-6 col-12-mobile"><input type="text" name="email" placeholder="Email" /></div>
                    <div class="col-6 col-12-mobile"><input type="text" name="password" placeholder="Mot de passe" /></div>
                    <div class="col-6 col-12-mobile"><input type="text" name="confirm" placeholder="Confirmation" /></div>
<!--                    <div class="col-12">-->
<!--                        <textarea name="message" placeholder="Message"></textarea>-->
<!--                    </div>-->
                    <div class="col-12">
                        <input type="submit" value="Enregistrer Infos" />
                        <input type="submit" value="Supprimer Compte" />
                    </div>
                </div>
            </form>

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

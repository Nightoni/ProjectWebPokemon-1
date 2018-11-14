@extends('layouts.app')
@section('pageTitle', 'Page Title')
@section('content')
<html>
    <head>
        <meta charset="utf-8">
        <title>App Name - @yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    </head>
    <body>
        <!-- <audio autoplay>
            <source src="http://s2.3lbh.com/s/87EJ97gi.mp3" type="audio/mpeg">
            Votre navigateur ne supporte pas le son de cette page.
        </audio> -->
        <!-- Start Main Container -->
        <div class="main-container">
            <!-- Start Pokemon Ball Top Part -->
            <div class="pokemon-top-part"></div>
            <!-- End Pokemon Ball Top Part -->
            <!-- Start Main Forms -->
            <div class="main-forms">
                <div class="signup-form">
                    <form class="sign-back" method="POST" action="{{ route('login') }}">
                    @csrf
                        <h1>Me connecter</h1>
                        <div class="signup-row">
                            <i class="fa fa-user"></i>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="signup-row">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-bottom">
                                <div class="form-info">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" value="{{ old('remember') ? 'checked' : '' }}">
                                    <label class="form-check-label" for="remember">
                                        {{ __('Memoriser') }}
                                    </label>
                                </div>
                                <div class="form-info">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié ?') }}
                                    </a>
                                </div>
                                <div class="form-info">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Connexion') }}
                                    </button>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Main Forms -->
            <!-- Start Pokemon Ball Bottom Part -->
            <div class="pokemon-bottom-part">
                <div class="white-part"></div>
                <div class="black-line"></div>
            </div>
            <!-- End Pokemon Ball Bottom Part -->
        </div>
        <!-- End Main Container -->
        <!-- Start Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{asset('js/login.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
<!--         <script src="https://use.fontawesome.com/7dddae9ad9.js"></script> -->
<!--         <script type="text/javascript" src="main.js"></script> -->
        <!-- End Scripts -->
    </body>
</html>

@endsection
<!-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Se connecter') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->
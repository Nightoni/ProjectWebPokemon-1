@extends('layouts.app')
@section('pageTitle', 'Page Title')
@push('css')
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
@endpush
@section('content')
<div id="banner">
    <h2>Votre site d'actualité
        <br />
        et d'échange de cartes<strong> INTER-JEU</strong></h2>
    <!-- <p>ACCUEIL</p> -->
    <!-- <a href="#" class="button large icon fa-check-circle">Yes it does</a> -->
</div>
<div id="page-wrapper">
    <!-- Main Wrapper -->
    <div id="main-wrapper">
        <div class="wrapper style3">
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-8 col-12-medium">
                            <!-- Article list -->
                            <section class="box article-list">
                                <h2 class="icon fa-newspaper-o"></i>ACTUALITES</h2>

                                <!-- Excerpt -->
                                <article class="box excerpt">
                                    <a href="#" class="image left"><img src="images/Actus/Tournoi2511.jpg" alt="" /></a>
                                    <div>
                                        <header>
                                            <span class="date">30 NOV.</span>
                                            <h3><a href="#">Nouveau tournoi</a></h3>
                                        </header>
                                        <p>Un nouveau tournoi aura lieu à Bordeaux le week end du 1 et 2 decembre rassemblant différents jeux : Pokemon, Magic...</p>
                                    </div>
                                </article>

                                <!-- Excerpt -->
                                <article class="box excerpt">
                                    <a href="#" class="image left"><img src="images/Actus/yeah.jpg" alt="" /></a>
                                    <div>
                                        <header>
                                            <span class="date">25 NOV.</span>
                                            <h3><a href="#">Un millier d'inscrits. Merci à vous</a></h3>
                                        </header>
                                        <p>Grâce à vous nous avons atteint le millier d'inscrits cette semaine. Un événement sera mis en place prochainement
                                            afin de vous récompenser.
                                        </p>
                                    </div>
                                </article>

                                <!-- Excerpt -->
                                <article class="box excerpt">
                                    <a href="#" class="image left"><img src="images/Actus/nouvelle.jpg" alt="" /></a>
                                    <div>
                                        <header>
                                            <span class="date">22 NOV.</span>
                                            <h3><a href="#">Nouvelle version de cartes Pokemon</a></h3>
                                        </header>
                                        <p>Une nouvelle version de cartes Pokemon est sortie dans la collection soleil et lune ce jour.
                                            Quel sont les cartes à avoir !!!
                                        </p>
                                    </div>
                                </article>
                                <!-- Excerpt -->
                                <article class="box excerpt">
                                    <a href="#" class="image left"><img src="images/Actus/perso.jpg" alt="" /></a>
                                    <div>
                                        <header>
                                            <span class="date">16 NOV.</span>
                                            <h3><a href="#">Notre site ouvre son espace personnel</a></h3>
                                        </header>
                                        <p>Des aujourd'hui il vous est possible de créer votre compte personnel afin de lister vos cartes
                                            et de créer vos liste de cartes souhaitées. A vos souris !!</p>
                                    </div>
                                </article>
                                <!-- Excerpt -->
                                <article class="box excerpt">
                                    <a href="#" class="image left"><img src="images/Actus/welcome.jpg" alt="" /></a>
                                    <div>
                                        <header>
                                            <span class="date">12 NOV.</span>
                                            <h3><a href="#">Ouverture du site House Of Gaming Card ce jour.</a></h3>
                                        </header>
                                        <p>Bonjour à tous, nous sommes heureux de vous annoncer l'ouverture du premier site permettant
                                            l'échange de vos cartes INTER-JEU (Pokemon, YuGiOh, Magic, ...) et plein d'autres jeux par la suite.</p>
                                    </div>
                                </article>

                            </section>
                        </div>
                        <div class="col-4 col-12-medium">

                            <!-- Spotlight -->
                            <section class="box spotlight">
                                <h2 class="icon fa-trophy"></i>COMPTE PREMIUM</h2>
                                <article>
                                    <a href="#" class="image featured"><img src="images/premium.jpg" alt=""></a>
                                    <header>
                                        <h3><a href="#">Choisir le compte Premium</a></h3>
                                        <p>Les avantages que cela représente</p>
                                    </header>
                                    <p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus semper mod
                                        quisturpis nisi consequat ornare in, hendrerit in lectus semper mod quis eget mi quat etiam
                                        lorem. Phasellus quam turpis, feugiat sed et lorem ipsum dolor consequat dolor feugiat sed
                                        et tempus consequat etiam.</p>
                                    <p>Lorem ipsum dolor quam turpis, feugiat sit amet ornare in, hendrerit in lectus semper
                                        mod quisturpis nisi consequat etiam lorem sed amet quam turpis.</p>
                                    <footer>
                                        <a href="#" class="button alt icon fa-star">Devenir PREMIUM</a>
                                    </footer>
                                </article>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Scripts -->

@endsection
@push('javascript')
<script src="{{asset('js/jquery.min.js') }}"></script>
<script src="{{asset('js/jquery.dropotron.min.js') }}"></script>
<script src="{{asset('js/browser.min.js') }}"></script>
<script src="{{asset('js/breakpoints.min.js') }}"></script>
<script src="{{asset('js/util.js') }}"></script>
<script src="{{asset('js/main.js') }}"></script>
@endpush

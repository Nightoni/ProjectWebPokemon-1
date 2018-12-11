@extends('layouts.app')
@section('pageTitle', 'Page Title')
@section('content')
<html>
	<head>
		<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">
			<!-- Header -->
				<div id="header-wrapper">
					<div class="container">
						<!-- Header -->
							<header id="header">
								<div class="inner">
									<!-- Logo -->
										<h1><a href="{{ url('/') }}" id="logo">House of Trading Cards</a></h1>
									<!-- Nav -->
										<nav id="nav">
											<ul>
												<li class="current_page_item"><a href="{{ url('/') }}">Accueil</a></li>
												<li>
													<a href="{{ url('/') }}">Pokemon</a>
													<ul>
														<li><a href="{{ url('/pk/accar') }}">Actus cartes</a></li>
														<li>
															<a href="#">Cartes</a>
															<ul>
																<li><a href="{{ url('/pk/li') }}">Liste complete</a></li>
																<li><a href="{{ url('/pk/top') }}">Top de la semaine</a></li>
																<li><a href="{{ url('/pk/mo') }}">Meilleurs offres</a></li>
															</ul>
														</li>
														<li>
															<a href="#">L'univers</a>
															<ul>
																<li><a href="{{ url('/pk/act') }}">Actualités</a></li>
																<li><a href="{{ url('/pk/jv') }}">Jeux vidéos</a></li>
																<li><a href="{{ url('/pk/cl') }}">Coin Lecture</a></li>
																<li><a href="{{ url('/pk/fo') }}">Forums</a></li>
															</ul>
														</li>
														<li><a href="{{ url('/boutique') }}">Boutique</a></li>
													</ul>
												</li>
												<li>
													<a href="{{ url('/') }}">Yu Gi Oh</a>
													<ul>
														<li><a href="#">Actus cartes</a></li>
														<li>
															<a href="#">Cartes</a>
															<ul>
																<li><a href="{{ url('/') }}">Liste complete</a></li>
																<li><a href="{{ url('/') }}">Top de la semaine</a></li>
																<li><a href="{{ url('/') }}">Meilleurs offres</a></li>
															</ul>
														</li>
														<li>
															<a href="#">L'univers</a>
															<ul>
																<li><a href="{{ url('/') }}">Actualités</a></li>
																<li><a href="{{ url('/') }}">Jeux vidéos</a></li>
																<li><a href="{{ url('/') }}">Coin Lecture</a></li>
																<li><a href="{{ url('/') }}">Forums</a></li>
															</ul>
														</li>
														<li>
															<a href="#">Boutique</a>
															<ul>
																<li><a href="{{ url('/') }}">Cartes</a></li>
																<li><a href="{{ url('/') }}">Goodies</a></li>
															</ul>
														</li>
														
													</ul>
												</li>
												<li>
													<a href="{{ url('/') }}">Magic</a>
													<ul>
														<li><a href="#">Actus cartes</a></li>
														<li>
															<a href="#">Cartes</a>
															<ul>
																<li><a href="#">Liste complete</a></li>
																<li><a href="#">Top de la semaine</a></li>
																<li><a href="#">Meilleurs offres</a></li>
															</ul>
														</li>
														<li>
															<a href="#">L'univers</a>
															<ul>
																<li><a href="#">Actualités</a></li>
																<li><a href="#">Jeux vidéos</a></li>
																<li><a href="#">Coin Lecture</a></li>
																<li><a href="#">Forums</a></li>
															</ul>
														</li>
														<li>
															<a href="#">Boutique</a>
															<ul>
																<li><a href="#">Cartes</a></li>
																<li><a href="#">Goodies</a></li>
															</ul>
														</li>
														
													</ul>
												</li>
												<li>
													<a href="{{ url('/') }}">Final Fantasy</a>
													<ul>
														<li><a href="#">Actus cartes</a></li>
														<li>
															<a href="#">Cartes</a>
															<ul>
																<li><a href="#">Liste complete</a></li>
																<li><a href="#">Top de la semaine</a></li>
																<li><a href="#">Meilleurs offres</a></li>
															</ul>
														</li>
														<li>
															<a href="#">L'univers</a>
															<ul>
																<li><a href="#">Actualités</a></li>
																<li><a href="#">Jeux vidéos</a></li>
																<li><a href="#">Coin Lecture</a></li>
																<li><a href="#">Forums</a></li>
															</ul>
														</li>
														<li>
															<a href="#">Boutique</a>
															<ul>
																<li><a href="#">Cartes</a></li>
																<li><a href="#">Goodies</a></li>
															</ul>
														</li>
														
													</ul>
												</li>
											</ul>
										</nav>

								</div>
							</header>

						<!-- Banner -->
							<div id="banner">
								<h2>Votre site d'actualité 
								<br />
								et d'échange de cartes<strong> INTER-JEU</strong></h2>
								<!-- <p>ACCUEIL</p> -->
								<!-- <a href="#" class="button large icon fa-check-circle">Yes it does</a> -->
							</div>
					</div>
				</div>
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
															<p>Un nouveau tournoi aura lieu à Bordeaux le week end du 1 et 2 decembre rassemblant différents jeux : Pokemon, ...</p>
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

			<!-- Footer Wrapper -->
			<div id="footer-wrapper">
    <footer id="footer" class="container">
        <div class="row">
            <div class="col-3 col-6-medium col-12-small">
                <!-- Links -->
                    <section>
                        <h2>LIENS</h2>
                        <ul class="divided">
                            <li><a href="#">Quam turpis feugiat dolor</a></li>
                            <li><a href="#">Amet ornare in hendrerit </a></li>
                            <li><a href="#">Semper mod quisturpis nisi</a></li>
                            <li><a href="#">Consequat etiam phasellus</a></li>
                            <li><a href="#">Amet turpis, feugiat et</a></li>
                            <li><a href="#">Ornare hendrerit lectus</a></li>
                            <li><a href="#">Semper mod quis et dolore</a></li>
                            <li><a href="#">Amet ornare in hendrerit</a></li>
                            <li><a href="#">Consequat lorem phasellus</a></li>
                            <li><a href="#">Amet turpis, feugiat amet</a></li>
                            <li><a href="#">Semper mod quisturpis</a></li>
                        </ul>
                    </section>

            </div>
            <div class="col-3 col-6-medium col-12-small">

                <!-- Links -->
                    <section>
                        <h2>PLAN DU SITE</h2>
                        <ul class="divided">
                            <li><a href="#">Quam turpis feugiat dolor</a></li>
                            <li><a href="#">Amet ornare in in lectus</a></li>
                            <li><a href="#">Semper mod sed tempus nisi</a></li>
                            <li><a href="#">Consequat etiam phasellus</a></li>
                        </ul>
                    </section>

                <!-- Links -->
                    <section>
                        <h2>NOUS CONNAITRE</h2>
                        <ul class="divided">
                            <li><a href="#">Quam turpis feugiat dolor</a></li>
                            <li><a href="#">Amet ornare hendrerit lectus</a></li>
                            <li><a href="#">Semper quisturpis nisi</a></li>
                            <li><a href="#">Consequat lorem phasellus</a></li>
                        </ul>
                    </section>

            </div>
            <div class="col-6 col-12-medium imp-medium">

                <!-- About -->
                    <section>
                        <h2>Remerciements</h2>
                        <p>Hi! This is <strong>ZeroFour</strong>, a free, fully responsive HTML5 site
                        template by <a href="http://twitter.com/ajlkn">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a>.
                        It's <a href="http://html5up.net/license/">Creative Commons Attribution</a>
                        licensed so use it for any personal or commercial project (just credit us
                        for the design!).</p>
                        <a href="#" class="button alt icon fa-arrow-circle-right">HTML5 UP</a>
                    </section>

                <!-- Contact -->
                    <section>
                        <h2>Nous contacter</h2>
                        <div>
                            <div class="row">
                                <div class="col-6 col-12-small">
                                    <dl class="contact">
                                        <dt>Twitter</dt>
                                        <dd><a href="#">@untitled-corp</a></dd>
                                        <dt>Facebook</dt>
                                        <dd><a href="#">facebook.com/untitled</a></dd>
                                        <dt>WWW</dt>
                                        <dd><a href="#">untitled.tld</a></dd>
                                        <dt>Email</dt>
                                        <dd><a href="#">user@untitled.tld</a></dd>
                                    </dl>
                                </div>
                                <div class="col-6 col-12-small">
                                    <dl class="contact">
                                        <dt>Address</dt>
                                        <dd>
                                            1234 Fictional Rd<br />
                                            Nashville, TN 00000-0000<br />
                                            USA
                                        </dd>
                                        <dt>Phone</dt>
                                        <dd>(000) 000-0000</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </section>

            </div>
            <div class="col-12">
                <div id="copyright">
                    <ul class="menu">
                        <li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
		</div>
	</body>
</html>
<!-- Scripts -->
			<script src="{{asset('js/jquery.min.js') }}"></script>
			<script src="{{asset('js/jquery.dropotron.min.js') }}"></script>
			<script src="{{asset('js/browser.min.js') }}"></script>
			<script src="{{asset('js/breakpoints.min.js') }}"></script>
			<script src="{{asset('js/util.js') }}"></script>
			<script src="{{asset('js/main.js') }}"></script>
@endsection

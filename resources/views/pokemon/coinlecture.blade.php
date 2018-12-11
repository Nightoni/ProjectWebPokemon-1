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
												<h2 class="icon fa-file-text-o">Livres</h2>

												<!-- Excerpt -->
													<article class="box excerpt">
														<a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
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
														<a href="#" class="image left"><img src="images/pic05.jpg" alt="" /></a>
														<div>
															<header>
																<span class="date">25 NOV.</span>
																<h3><a href="#">Un millier d'inscrit. Merci à vous</a></h3>
															</header>
															<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus
															semper mod quisturpis nisi consequat etiam lorem. Phasellus quam turpis,
															feugiat et sit amet ornare in, hendrerit in lectus semper mod quis eget mi dolore.</p>
														</div>
													</article>
												<!-- Excerpt -->
													<article class="box excerpt">
														<a href="#" class="image left"><img src="images/pic06.jpg" alt="" /></a>
														<div>
															<header>
																<span class="date">22 NOV.</span>
																<h3><a href="#">Nouvelle version de cartes Pokemon</a></h3>
															</header>
															<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus
															semper mod quisturpis nisi consequat etiam lorem. Phasellus quam turpis,
															feugiat et sit amet ornare in, hendrerit in lectus semper mod quis eget mi dolore.</p>
														</div>
													</article>

											</section>
											<section class="box article-list">
												<h2 class="icon fa-file-text-o">Magazines</h2>

												<!-- Excerpt -->
													<article class="box excerpt">
														<a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
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
														<a href="#" class="image left"><img src="images/pic05.jpg" alt="" /></a>
														<div>
															<header>
																<span class="date">25 NOV.</span>
																<h3><a href="#">Un millier d'inscrit. Merci à vous</a></h3>
															</header>
															<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus
															semper mod quisturpis nisi consequat etiam lorem. Phasellus quam turpis,
															feugiat et sit amet ornare in, hendrerit in lectus semper mod quis eget mi dolore.</p>
														</div>
													</article>
												<!-- Excerpt -->
													<article class="box excerpt">
														<a href="#" class="image left"><img src="images/pic06.jpg" alt="" /></a>
														<div>
															<header>
																<span class="date">22 NOV.</span>
																<h3><a href="#">Nouvelle version de cartes Pokemon</a></h3>
															</header>
															<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus
															semper mod quisturpis nisi consequat etiam lorem. Phasellus quam turpis,
															feugiat et sit amet ornare in, hendrerit in lectus semper mod quis eget mi dolore.</p>
														</div>
													</article>

											</section>
											<section class="box article-list">
												<h2 class="icon fa-file-text-o">Divers</h2>

												<!-- Excerpt -->
													<article class="box excerpt">
														<a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
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
														<a href="#" class="image left"><img src="images/pic05.jpg" alt="" /></a>
														<div>
															<header>
																<span class="date">25 NOV.</span>
																<h3><a href="#">Un millier d'inscrit. Merci à vous</a></h3>
															</header>
															<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus
															semper mod quisturpis nisi consequat etiam lorem. Phasellus quam turpis,
															feugiat et sit amet ornare in, hendrerit in lectus semper mod quis eget mi dolore.</p>
														</div>
													</article>
												<!-- Excerpt -->
													<article class="box excerpt">
														<a href="#" class="image left"><img src="images/pic06.jpg" alt="" /></a>
														<div>
															<header>
																<span class="date">22 NOV.</span>
																<h3><a href="#">Nouvelle version de cartes Pokemon</a></h3>
															</header>
															<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus
															semper mod quisturpis nisi consequat etiam lorem. Phasellus quam turpis,
															feugiat et sit amet ornare in, hendrerit in lectus semper mod quis eget mi dolore.</p>
														</div>
													</article>

											</section>
									</div>
									<div class="col-4 col-12-medium">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			<!-- Footer Wrapper -->
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

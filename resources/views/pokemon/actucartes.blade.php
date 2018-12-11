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
					<div class="wrapper style2">
						<div class="inner">
							<div class="container">
								<div class="row">
									<div class="col-8 col-12-medium">
										<div id="content">

											<!-- Content -->

												<article>
													<header class="major">
														<h3>30 nov. 2018</h3>
														<h2>Découvrez les cartes ESCOUADE</h2>
													</header>

													<span class="image featured"><img src="images/tag-team-169-fr.jpg" alt="" /></span>

													<p>Des Pokémon s'associent pour combiner leurs pouvoirs sur les nouvelles cartes ESCOUADE, nouveauté à venir dans le JCC Pokémon. 
														Armés de PV et d'attaques dévastatrices, ces duos de Pokémon sont prêts à tous les affrontements. En outre, toutes les ESCOUADES
														 sont des Pokémon-GX, elles sont donc dotées d'une attaque GX renversante. Protégez-les à tout prix, car si votre ESCOUADE est 
														 mise K.O., votre adversaire récupère trois cartes Récompense !
													</p>

													<h3>Jetez un œil sur les incroyables Pokémon-GX ESCOUADE qui vont bientôt rejoindre le Jeu de Cartes à Collectionner Pokémon.</h3>
													<p>Voici les six premiers Pokémon-GX ESCOUADE avec lesquels vous allez bientôt combattre dans le JCC Pokémon. Et découvrez aussi 
														l'avis des membres de l'équipe créative du JCC Pokémon sur la conception de ces nouvelles cartes.</p>
												</article>
												<article>
													<header class="major">
														<h3>21 nov. 2018</h3>
														<h2>Découvrez les cartes ESCOUADE</h2>
													</header>

													<span class="image featured"><img src="images/sm08-highlighted-cards-169-fr.jpg" alt="" /></span>

													<p>Maintenant que la nouvelle extension Soleil et Lune – Tonnerre Perdu est sortie, prenons le temps d'admirer en détail le splendide travail
														 artistique de chaque carte. Ces très belles cartes réalisées par des artistes de grand talent donnent au JCC Pokémon toute sa personnalité
														  et offrent aux fans une vue unique du monde Pokémon. Voyons ensemble les cartes qui nous ont le plus impressionnés.
													</p>

													<h3>La nouvelle extension Soleil et Lune – Tonnerre Perdu est remplie de magnifiques illustrations qui vont ravir les collectionneurs.</h3>
													<p>Vos yeux s'arrêteront probablement sur des cartes illustrées par l'artiste connu sous le numéro 0313. Les lignes apparemment simples de
														 ses dessins cachent une quantité surprenante de petits détails, et l'utilisation de couleurs vives donne un caractère particulièrement
														  distinctif à ces cartes. Charmillon en est un très bon exemple. Ce Pokémon au trait simple est mis en évidence par un décor floral
														   élaboré. On ne peut qu'être saisi par la vitalité qui émane de cette palette de couleurs vives. Il en est de même de Wattouat, 
														   dessiné si simplement, qui se distingue particulièrement par ses couleurs vives au milieu d'un champ de pissenlits finement détaillés.
															Les couleurs de la carte Polarhume sont certes plus discrètes, mais le décor enneigé n'en est pas moins remarquable. 
															La pureté du blanc contraste avec le bleu pâle de Polarhume, et donne au Pokémon une apparence amicale.</p>
												</article>
												<article>
													<header class="major">
														<h3>14 nov. 2018</h3>
														<h2>Organisez une soirée JCC Pokémon</h2>
													</header>

													<span class="image featured"><img src="images/sm8-build-battle-box-primer-169-fr.jpg" alt="" /></span>

													<p>Vous recherchez une façon rapide et facile de jouer au Jeu de Cartes à Collectionner Pokémon avec vos amis ? Essayez les Boîtiers
														 Stratégies et Combats. Vous trouverez dans chaque boîte suffisamment de Pokémon et de cartes Dresseur pour vous divertir, tout
														  en apprenant à construire un deck et à développer des stratégies de combats. C'est également un très bon moyen pour commencer
														   votre collection de cartes Soleil et Lune – Tonnerre Perdu.
													</p>

													<h3>Réunissez vos amis autour de Boîtiers Stratégies et Combats, et la fête est assurée.</h3>
													<p>Chaque Boîtier Stratégies et Combats contient un pack Évolution de 23 cartes dont une carte promo brillante exclusive. Il est spécialement
														 conçu pour apporter de solides fondations à votre nouveau deck et vous lancer immédiatement dans le jeu. Chaque boîte contient 
														 aussi quatre boosters de 10 cartes de Soleil et Lune – Tonnerre Perdu. Avec ces cartes et quelques-unes de vos cartes Énergie, 
														 vous pourrez construire un deck de 40 cartes. Essayez d'y inclure des Pokémon dont le type est largement représenté parmi ces cartes,
														  et finissez en ajoutant vos cartes Dresseurs et Énergie. If you're short on Energy cards, look for the Pokémon TCG: Basic Energy Box
														   where Pokémon TCG products are sold—it contains 450 assorted basic Energy cards, which should be enough to build any deck you can dream
															of. Avec des packs Évolution variés et quatre boosters, les Boîtiers Stratégies et Combats permettent aux joueurs de donner libre
															 cours à leur créativité dans la construction de leur deck.
													</p>
												</article>

										</div>
									</div>
									<div class="col-4 col-12-medium">
										<div id="sidebar">

											<!-- Sidebar -->

												<section>
													<header class="major">
														<h2>Compte Premium</h2>
													</header>
													<p>Devenez Premium des aujourd'hui et béneficiez de tous les avantages de cette offre. Pour l'ouverture du site, <strong>nous vous offrons jusqu' à un mois d'abonnement !!!</strong></p>
													<footer>
														<a href="#" class="button icon fa-info-circle">Compte Premium</a>
													</footer>
												</section>

												<section>
													<header class="major">
														<h2>Offres Boutique</h2>
													</header>
													<ul class="style2">
														<li><a href="#">Amet turpis, feugiat et sit amet</a></li>
														<li><a href="#">Ornare in hendrerit in lectus</a></li>
														<li><a href="#">Semper mod quis eget mi dolore</a></li>
														<li><a href="#">Quam turpis feugiat sit dolor</a></li>
														<li><a href="#">Amet ornare in hendrerit in lectus</a></li>
														<li><a href="#">Semper mod quisturpis nisi</a></li>
														<li><a href="#">Consequat etiam lorem phasellus</a></li>
														<li><a href="#">Amet turpis, feugiat et sit amet</a></li>
														<li><a href="#">Semper mod quisturpis nisi</a></li>
													</ul>
													<footer>
														<a href="{{ url('/boutique') }}" class="button icon fa-arrow-circle-o-right">Allez à la Boutique</a>
													</footer>
												</section>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
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

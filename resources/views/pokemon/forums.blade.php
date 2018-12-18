@extends('layouts.app')
@section('pageTitle', 'Page Title')
@section('content')
@push('css')
	<link href="{{ asset('css/forum.css') }}" rel="stylesheet">
@endpush
@section('content')
			<!-- Main Wrapper -->
				<div id="main-wrapper">
					<div class="wrapper style2">
						<div class="inner">
							<div class="container">
								<div class="row">
									<div class="col-4 col-12-medium">
										<div id="sidebar">

											<!-- Sidebar -->

												<section>
													<header class="major">
														<h2>Creer une demande</h2>
													</header>
													<p>Suivez quelques etapes simples afin de créer votre premier Post sur nos forums.</p>
													<footer>
														<a href="#" class="button icon fa-info-circle">Commencer</a>
													</footer>
												</section>
												<section>
													<header class="major">
														<h2>Tutoriaux</h2>
													</header>
													<ul class="style2">
														<li><a href="#">Creer son compte</a></li>
														<li><a href="#">Ajouter et supprimer des cartes à votre collection</a></li>
														<li><a href="#">Passer à un compte Premium</a></li>
														<li><a href="#">Modifier vos préférences</a></li>
														<li><a href="#">Vendre une carte</a></li>
														<li><a href="#">Proposer un échange ou faire une contre offre.</a></li>
														<li><a href="#">Valider un échange.</a></li>
													</ul>
													<footer>
														<a href="#" class="button icon fa-arrow-circle-o-right">Liste des tutoriaux</a>
													</footer>
												</section>

												<section>
													<header class="major">
														<h2>Derniéres reponses</h2>
													</header>
													<ul class="style2">
														<li><a href="#">Recherche carte Pikachu Noir & Blanc</a></li>
														<li><a href="#">Echange carte Salaméche</a></li>
														<li><a href="#">Carte Magic premiére edition à vendre.</a></li>
														<li><a href="#">Renseignement echange carte</a></li>
														<li><a href="#">Mise en place jeu concours</a></li>
														<li><a href="#">Probléme espace perso</a></li>
														<li><a href="#">Supprimer carte ajouté par erreur.</a></li>
														<li><a href="#">Probléme pour l'ajout d'une carte</a></li>
														<li><a href="#">Echange 3 cartes Magic TRES rares</a></li>
													</ul>
													<footer>
														<a href="#" class="button icon fa-arrow-circle-o-right">Liste des forums</a>
													</footer>
												</section>

										</div>
									</div>
									<div class="col-8 col-12-medium imp-medium">
										<div id="content">

											<!-- Content -->

												<article>
														<header class="major">
															<h2><i class="fa fa-hashtag" aria-hidden="true"></i> Recherche carte Pikachu Noir & Blanc</h2>
															<p>Derniére réponse : 17/12 à 15h16</p>
														</header>
													<div class = art>
														<h3>SUJET</h3>
														<p>Je suis à la recherche de la carte Pikachu de la collection Noir & Blanc pour achat ou échange.</p>
														<h3>Derniére réponse</h3>
														<p>J'ai cette carte et je te propose de l'échanger. Ecrit moi en PM ou envoi moi une offre d'échange sur 
															mon compte avec mon Pseudo "Loit".</p>
													</div>
												</article>
												<article>
														<header class="major">
															<h2><i class="fa fa-hashtag" aria-hidden="true"></i> Echange carte Salaméche</h2>
															<p>Derniére réponse : 17/12 à 13h10</p>
														</header>
													<div class = art>
														<h3>SUJET</h3>
														<p>Je ouhaite échanger ma carte Selaméche appartenantà la premiére collection de cartes Pokemon.</p>
														<h3>Derniére réponse</h3>
														<p>Serait il possible d'en savoir plus sur l'^état de la carte. Voir une photo si possible.</p>
													</div>
												</article>
												<article>
														<header class="major">
															<h2><i class="fa fa-hashtag" aria-hidden="true"></i> Carte Magic premiére edition à vendre.</h2>
															<p>Derniére réponse : 16/12 à 14h10</p>
														</header>
													<div class = art>
														<h3>SUJET</h3>
														<p>Toute premiére édition de la carte Tree à vendre. Faire une offre.</p>
														<h3>Derniére réponse</h3>
														<p>Je suis intéressé et je t'ai envoyé un message en privé.</p>
													</div>
												</article>
												<article>
														<header class="major">
															<h2><i class="fa fa-hashtag" aria-hidden="true"></i> Renseignement echange carte</h2>
															<p>Derniére réponse : 13/12 à 18h25</p>
														</header>
													<div class = art>
														<h3>SUJET</h3>
														<p>Bonjour je souhaite connaitre les modalités pour la création et la mise en place d'un échange sur le site.</p>
														<h3>Derniére réponse</h3>
														<p>Modérateur : Bonjour, tu pourras trouver dans les forums plusieurs article permettant d'apprendre le fonctionnement
															de notre site pour toutes les opération ( ajout de cartes, ventes, échanges, ...).</p>
													</div>
												</article>
												<article>
														<header class="major">
															<h2><i class="fa fa-hashtag" aria-hidden="true"></i> Mise en place jeu concours</h2>
															<p>Derniére réponse : 13/12 à 15h00</p>
														</header>
													<div class = art>
														<h3>SUJET</h3>
														<p>Mise en place d'un jeu concours sur votre site d'échange avec des decks à gagner.</p>
														<h3>Derniére réponse</h3>
														<p>Moderateur : Ajout de lots pour le prochain jeu concours du 24 Décembre.</p>
													</div>
												</article>
												<article>
														<header class="major">
															<h2><i class="fa fa-hashtag" aria-hidden="true"></i> Probléme espace perso</h2>
															<p>Derniére réponse : 13/12 à 14h00</p>
														</header>
													<div class = art>
														<h3>SUJET</h3>
														<p>J'ai un probléme avec mon espace perso. Je ne vois pas une carte aprés l'avoir ajouté.</p>
														<h3>Derniére réponse</h3>
														<p>Bonjour, il faut confirmer l'ajout aprés avoir choisi la carte dans la liste sinon la carte ne 
															s'ajoutera pas à vos cartes.
														</p>
													</div>
												</article>
												<article>
														<header class="major">
															<h2><i class="fa fa-hashtag" aria-hidden="true"></i> Supprimer carte ajouté par erreur.</h2>
															<p>Derniére réponse : 13/12 à 11h00</p>
														</header>
													<div class = art>
														<h3>SUJET</h3>
														<p>Bonjour, je souhaite supprimer une carte ajouté par erreur sur mon compte.</p>
														<h3>Derniére réponse</h3>
														<p>Modérateur : Bonjour, tu pourras trouver dans les forums plusieurs article permettant d'apprendre le fonctionnement
															de notre site pour toutes les opération ( ajout de cartes, ventes, échanges, ...).</p>
													</div>
												</article>
										</div>
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
										<h2>Filler Links</h2>
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
										<h2>More Filler</h2>
										<ul class="divided">
											<li><a href="#">Quam turpis feugiat dolor</a></li>
											<li><a href="#">Amet ornare in in lectus</a></li>
											<li><a href="#">Semper mod sed tempus nisi</a></li>
											<li><a href="#">Consequat etiam phasellus</a></li>
										</ul>
									</section>

								<!-- Links -->
									<section>
										<h2>Even More Filler</h2>
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
										<h2><strong>ZeroFour</strong> by HTML5 UP</h2>
										<p>Hi! This is <strong>ZeroFour</strong>, a free, fully responsive HTML5 site
										template by <a href="http://twitter.com/ajlkn">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a>.
										It's <a href="http://html5up.net/license/">Creative Commons Attribution</a>
										licensed so use it for any personal or commercial project (just credit us
										for the design!).</p>
										<a href="#" class="button alt icon fa-arrow-circle-right">Learn More</a>
									</section>

								<!-- Contact -->
									<section>
										<h2>Get in touch</h2>
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
@endsection
@push('javascript')
	<script src="{{asset('js/jquery.min.js') }}"></script>
	<script src="{{asset('js/jquery.dropotron.min.js') }}"></script>
	<script src="{{asset('js/browser.min.js') }}"></script>
	<script src="{{asset('js/breakpoints.min.js') }}"></script>
	<script src="{{asset('js/util.js') }}"></script>
	<script src="{{asset('js/main.js') }}"></script>
@endpush

@extends('layouts.app')
@section('pageTitle', 'Page Title')
@push('css')
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
@endpush
@section('content')
<!-- Main Wrapper -->
	<div id="main-wrapper">
		<div class="wrapper style3">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-8 col-12-medium">
							<!-- Article list -->
								<section class="box article-list">
									<h2><i class="fa fa-clone" aria-hidden="true"></i> Magazines</h2>
									<!-- Excerpt -->
										<article class="box excerpt">
											<a href="#" class="image left"><img src="images/livres3.jpg" alt="" /></a>
											<div>
												<header>
													<span class="date">18 DEC.</span>
													<h3><a href="#">Retrouvez-les tous</a></h3>
												</header>
												<p>Dans ce livre, tu voyageras dans les différents univers d'un monde fantastique
												à la recherche des Pokémon. En plus des missions de recherche et des défis à relever
												, tu découvriras 9 nouveaux Pokémon exclusifs ! De quoi t'amuser pendant des heures</p>
											</div>
										</article>
									<!-- Excerpt -->
										<article class="box excerpt">
											<a href="#" class="image left"><img src="images/livres2.jpg" alt="" /></a>
											<div>
												<header>
													<span class="date">15 DEC.</span>
													<h3><a href="#">L'encyclo</a></h3>
												</header>
												<p>La nouvelle édition de l'encyclopédie des Pokemon rassemblant l'intégralité des
													Pokemon, toutes les versions et évolutions.</p>
											</div>
										</article>
									<!-- Excerpt -->
										<article class="box excerpt">
											<a href="#" class="image left"><img src="images/livres1.jpg" alt="" /></a>
											<div>
												<header>
													<span class="date">8 DEC.</span>
													<h3><a href="#">Pokedex</a></h3>
												</header>
												<p>Retrouver le célebre pokedex avec toutes les caractéristiques de votre
												Pokemon préféré.</p>
											</div>
										</article>

								</section>
								<section class="box article-list">
									<h2><i class="fa fa-book" aria-hidden="true"></i> Livres</h2>

									<!-- Excerpt -->
										<article class="box excerpt">
											<a href="#" class="image left"><img src="images/roman.jpg" alt="" /></a>
											<div>
												<header>
													<span class="date">18 DEC.</span>
													<h3><a href="#">Un mistérieux Pokemon</a></h3>
												</header>
												<p>Roman de la collection Noir & Blanc. Un mystérieux Pokemon.</p>
											</div>
										</article>
									<!-- Excerpt -->
										<article class="box excerpt">
											<a href="#" class="image left"><img src="images/roman3.jpg" alt="" /></a>
											<div>
												<header>
													<span class="date">4 DEC.</span>
													<h3><a href="#">Un défi de ninja</a></h3>
												</header>
												<p>Roman de la collection Noir & Blanc. Un défi de ninja.</p>
											</div>
										</article>
									<!-- Excerpt -->
										<article class="box excerpt">
											<a href="#" class="image left"><img src="images/roman2.jpg" alt="" /></a>
											<div>
												<header>
													<span class="date">22 NOV.</span>
													<h3><a href="#">Aventures à Kalos</a></h3>
												</header>
												<p>Roman de la collection Noir & Blanc. Aventures à Kalos.</p>
											</div>
										</article>

								</section>
								<section class="box article-list">
									<h2><i class="icon fa-archive" aria-hidden="true"></i> Divers</h2>

									<!-- Excerpt -->
										<article class="box excerpt">
											<a href="#" class="image left"><img src="images/divers1.jpg" alt="" /></a>
											<div>
												<header>
													<span class="date">30 NOV.</span>
													<h3><a href="#">Stickers</a></h3>
												</header>
												<p>Collection de 600 Stickers Pokemon.</p>
											</div>
										</article>
									<!-- Excerpt -->
										<article class="box excerpt">
											<a href="#" class="image left"><img src="images/divers2.jpg" alt="" /></a>
											<div>
												<header>
													<span class="date">25 NOV.</span>
													<h3><a href="#">Coffret de dresseur</a></h3>
												</header>
												<p>Cette compilation de romans vous permettra d'apprendre à améliorer
													vos compétences de dresseur de Pokemon.</p>
											</div>
										</article>
									<!-- Excerpt -->
										<article class="box excerpt">
											<a href="#" class="image left"><img src="images/divers3.jpg" alt="" /></a>
											<div>
												<header>
													<span class="date">22 NOV.</span>
													<h3><a href="#">Agenda 2018-2019</a></h3>
												</header>
												<p>Agenda 2018-2019</p>
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

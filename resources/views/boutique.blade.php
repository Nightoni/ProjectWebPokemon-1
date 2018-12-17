@extends('layouts.app')
@section('pageTitle', 'Page Title')
@section('content')
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href="{{ asset('ItemSlider/css/main-style.css') }}" rel="stylesheet">
	
	<link href="{{ asset('ItemSlider/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('ItemSlider/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" placeholder="Enter Keyword Here ..." class="form-control">
                    </div>
                    &nbsp; 
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="well well-lg offer-box text-center">


                   Offre Journaliére : &nbsp; <span class="glyphicon glyphicon-cog"></span>&nbsp;10€ offerts tous les 100€ d'achats !!                
              
               
                </div>
                <div class="main box-border">
                    <div id="mi-slider" class="mi-slider">
                        <ul>

                            <li><a href="#">
                                <img src="images/pok1.jpg" alt="img01"><h4>Pack x4 Starters</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="images/pok2.jpg" alt="img02"><h4>Célébration d'Évolutions</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="images/pok3.jpg" alt="img03"><h4>Pikachu & Evoli</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="images/pok4.jpg" alt="img04"><h4>Pack x3 Starters</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="images/yugi1.jpg" alt="img05"><h4>Starter Pack Alior</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="images/yugi2.jpg" alt="img06"><h4>Starter Pack Tyuiop</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="images/yugi3.jpg" alt="img07"><h4>Starter Pack Tryu</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="images/yugi4.jpg" alt="img08"><h4>Starter Pack Berz</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="images/magic10.jpg" alt="img05"><h4>Speed & Cunning</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="images/magic11.jpg" alt="img06"><h4> Iurt & Terz</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="images/magic12.jpg" alt="img07"><h4>Eldraze</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="images/magic13.jpg" alt="img08"><h4>Starter Pack</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="ItemSlider/images/12.jpg" alt="img12"><h4>Carry-Ons</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="ItemSlider/images/13.jpg" alt="img13"><h4>Duffel Bags</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="ItemSlider/images/14.jpg" alt="img14"><h4>Laptop Bags</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="ItemSlider/images/15.jpg" alt="img15"><h4>Briefcases</h4>
                            </a></li>
                        </ul>
                        <nav>
                            <a href="#">Pokemon</a>
                            <a href="#">YuGiOh</a>
                            <a href="#">Magic</a>
                            <a href="#">Final Fantasy</a>
                        </nav>
                    </div>
                    
                </div>
                <br />
            </div>
            <!-- /.col -->
            
            <div class="col-md-3 text-center">
                <div class=" col-md-12 col-sm-6 col-xs-6" >
                    <div class="offer-text">
                        -30%
                    </div>
                    <div class="thumbnail product-box">
                        <img src="images/pokemon1.jpg" alt="" />
                        <div class="caption">
                            <h3><a href="#">Deck Pokemon </a></h3>
                            <p><a href="#">NOUVELLE COLLECTION </a></p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-12 col-sm-6 col-xs-6">
                    <div class="offer-text2">
                        -50%
                    </div>
                    <div class="thumbnail product-box">
                        <img src="images/magic3.png" alt="" />
                        <div class="caption">
                            <h3><a href="#">Deck Magic </a></h3>
                            <p><a href="#">COLLECTION HAZORET AGGRO</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-3">
                <div>
                    <a href="#" class="list-group-item active">Cartes
                    </a>
                    <ul class="list-group">

                        <li class="list-group-item">Pokemon
      <span class="label label-primary pull-right">3254</span>
                        </li>
                        <li class="list-group-item">YuGiOh
                      <span class="label label-success pull-right">659</span>
                        </li>
                        <li class="list-group-item">Magic
                         <span class="label label-danger pull-right">2869</span>
                        </li>
                        <li class="list-group-item">Final Fantasy
                             <span class="label label-info pull-right">434</span>
                        </li>
                        <li class="list-group-item">Divers
                             <span class="label label-success pull-right">6589</span>
                        </li>
                    </ul>
                </div>
                <!-- /.div -->
                <div>
                    <a href="#" class="list-group-item active list-group-item-success">Goodies
                    </a>
                    <ul class="list-group">

                        <li class="list-group-item">Jeux vidéos
                             <span class="label label-danger pull-right">300</span>
                        </li>
                        <li class="list-group-item">Films
                             <span class="label label-success pull-right">340</span>
                        </li>
                        <li class="list-group-item">Vetements & Decorations
                             <span class="label label-info pull-right">735</span>
                        </li>

                    </ul>
                </div>
                <!-- /.div -->
                <div>
                    <a href="#" class="list-group-item active">Offres partenaires
                    </a>
                    <ul class="list-group">
                        <li class="list-group-item">Cartes
                             <span class="label label-warning pull-right">456</span>
                        </li>
                        <li class="list-group-item">Vetements
                             <span class="label label-success pull-right">156</span>
                        </li>
                        <li class="list-group-item">Bijoux
                             <span class="label label-info pull-right">400</span>
                        </li>
                        <li class="list-group-item">Accessoires
                             <span class="label label-primary pull-right">89</span>
                        </li>
                        <li class="list-group-item">Jeux vidéos
                             <span class="label label-danger pull-right">90</span>
                        </li>
                        <li class="list-group-item">Films
                             <span class="label label-warning pull-right">567</span>
                        </li>
                    </ul>
                </div>
                <!-- /.div -->
                <div>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success"><a href="#">Prochaines Offres </a></li>
                        <li class="list-group-item list-group-item-info"><a href="#">Nouveaux produits</a></li>
                        <li class="list-group-item list-group-item-warning"><a href="#">Offres presques terminées</a></li>
                        <li class="list-group-item list-group-item-danger"><a href="#">Offres à saisir</a></li>
                    </ul>
                </div>
                <!-- /.div -->
                <div class="well well-lg offer-box offer-colors">


                    <span class="glyphicon glyphicon-star-empty"></span>25 % de reduction, EN PROFITER                
              
                   <br />
                    <br />
                    <div class="progress progress-striped">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                            style="width: 70%">
                            <span class="sr-only">70%</span>
                            2hr 35 mins restantes
                        </div>
                    </div>
                    <a href="#">Cliquez pour plus d'informations </a>
                </div>
                <!-- /.div -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div>
                    <ol class="breadcrumb">
                        <li><a href="#">CARTES</a></li>
                       <!--  <li class="active">Cartes</li> -->
                    </ol>
                </div>
                <!-- /.div -->
                <div class="row">
                    <div class="btn-group alg-right-pad">
                        <button type="button" class="btn btn-default"><strong>11569  </strong>Cartes</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                Trier par &nbsp;
                            <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Prix croissant</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Prix décroissant</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Par popularité</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Par avis</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="images/card1.jpg" alt="" />
                            <div class="caption">
                                <h3><a href="#">Pokemon Nouveau deck </a></h3>
                                <p>Prix: <strong>15€</strong>  </p>
                                <p><a href="#">COLLECTION SUN & MOON </a></p>
                                <p>La derniére version des cartes tant attendues est disponible</p>
                                <p><a href="#" class="btn btn-success" role="button">Ajouter au panier</a> <a href="#" class="btn btn-primary" role="button">Details</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="images/magic1.png" alt="" />
                            <div class="caption">
                                <h3><a href="#">Magic Collection <br>Izzet </a></h3>
                                <p>Prix: <strong>19,99€</strong>  </p>
                                <p><a href="#">COLLECTION IZZET </a></p>
                                <p>La collection IZZET est enfin disponible en France</p>
                                <p><a href="#" class="btn btn-success" role="button">Ajouter au panier</a> <a href="#" class="btn btn-primary" role="button">Details</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="images/magic2.jpg" alt="" />
                            <div class="caption">
                                <h3><a href="#">Magic Starter <br>Pack </a></h3>
                                <p>Prix: <strong>25€</strong>  </p>
                                <p><a href="#">COLLECTION TEREKI </a></p>
                                <p>Pack Starter de la derniére collection de cartes TEREKI</p>
                                <p><a href="#" class="btn btn-success" role="button">Ajouter au panier</a> <a href="#" class="btn btn-primary" role="button">Details</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <ul class="pagination alg-right-pad">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
                <!-- /.row -->
                <div>
                    <ol class="breadcrumb">
                        <li><a href="#">GOODIES</a></li>
                        <!-- <li><a href="#">Clothing</a></li>
                        <li class="active">Men's Clothing</li> -->
                    </ol>
                </div>
                <!-- /.div -->
                <div class="row">
                    <div class="btn-group alg-right-pad">
                        <button type="button" class="btn btn-default"><strong>1421  </strong>Goodies</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                Trier par &nbsp;
      <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Prix croissant</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Prix décroissant</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Par popularité</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Par avis</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="images/good1.jpg" alt="" />
                            <div class="caption">
                                <h3><a href="#">Bob Pokemon </a></h3>
                                <p>Prix : <strong>12€</strong>  </p>
                                <p><a href="#">Ptional dismiss button </a></p>
                                <p>Ptional dismiss button in tional dismiss button in   </p>
                                <p>
                                    <a href="#" class="btn btn-success" role="button">Ajouter au panier</a>
                                    <a href="#" class="btn btn-primary" role="button">Details</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="images/good2.jpg" alt="" />
                            <div class="caption">
                                <h3><a href="#">Peluche Pikachu</a></h3>
                                <p>Prix : <strong>32€</strong>  </p>
                                <p><a href="#">Ptional dismiss button </a></p>
                                <p>Ptional dismiss button in tional dismiss button in   </p>
                                <p><a href="#" class="btn btn-success" role="button">Ajouter au panier</a> <a href="#" class="btn btn-primary" role="button">Details</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="images/good3.jpg" alt="" />
                            <div class="caption">
                                <h3><a href="#">Portefeuille Pikachu</a></h3>
                                <p>Prix : <strong>7€</strong>  </p>
                                <p><a href="#">Ptional dismiss button </a></p>
                                <p>Ptional dismiss button in tional dismiss button in   </p>
                                <p><a href="#" class="btn btn-success" role="button">Ajouter au panier</a> <a href="#" class="btn btn-primary" role="button">Details</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <ul class="pagination alg-right-pad">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    
    <!-- /.col -->
    <!--Footer end -->
    <!--Core JavaScript file  -->
	<script src="{{asset('ItemSlider/js/jquery-1.10.2.js') }}"></script>
	<script src="{{asset('ItemSlider/js/bootstrap.js') }}"></script>
	<script src="{{asset('ItemSlider/js/modernizr.custom.63321.js') }}"></script>
	<script src="{{asset('ItemSlider/js/jquery.catslider.js') }}"></script>
    <script>
       jQuery(document).ready(function($) {

            $('#mi-slider').catslider();

        });
		</script>
</body>
</html>
@endsection

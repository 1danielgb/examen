<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Veterinaria</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='//fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/materialize.min.css"/>
	<link rel="stylesheet" href="/css/app.css"/>
</head>
<body>
	<header>
		<?php $route = Route::current()->uri(); ?>
		<nav class="cyan darken-3">
		    <div class="nav-wrapper">
		    	<a href="/" class="brand-logo">Veterinaria <i class=""></i></a>
		    	<!--Boton de menu-->
		    	<a href="#" data-activates="mobile-demo" class="button-collapse">
		    		<i class="fa fa-bars"></i>
		    	</a>
		    	<!--resoluciones PC-->
		      	<ul id="nav-mobile" class="right hide-on-med-and-down">
		        	<li class=@if($route == 'registrar') {{ 'active-item' }} @endif><a href="/registrar">Registrar <i class="fa fa-phone-square"></i></a></li>
		        	<li class=@if($route == 'acceder') {{ 'active-item' }} @endif><a href="/acceder">Acceder <i class="fa fa-user"></i></a></li>
		      	</ul>
				<!--Resoluciones Tabletas y Telefonos-->
				<ul class="side-nav" id="mobile-demo">
		        	<li><a href="/registrar">Registrar <i class="fa fa-phone-square"></i></a></li>
		        	<li><a href="/acceder">Acceder <i class="fa fa-user"></i></a></li>
			    </ul>
		    </div>
		</nav>
	</header>
	@yield('content')
	<footer class="page-footer cyan darken-3">
      	<div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">
                	Veterinaria <i class=""></i>
                </h5>
                <p class="grey-text text-lighten-4">
                	Los precios publicados en esta tienda están sujetos a cambios sin previo aviso y solo son aplicables para ventas en línea. <br/>
                </p>
                <div class="payment">
                	<i class="fa fa-cc-visa"></i>
                	<i class="fa fa-cc-mastercard"></i>
                	<i class="fa fa-cc-amex"></i>
                	<i class="fa fa-cc-paypal"></i>
                </div>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Enlaces</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="/registrar">Registrar</a></li>
                  <li><a class="grey-text text-lighten-3" href="/acceder">Acceder</a></li>
                </ul>
              </div>
            </div>
      	</div>
      	<div class="footer-copyright">
            <div class="container">
	            © 2016 - Daniel Galván Bautista
	            <a class="text-lighten-4 right btn-social" href="#!"><i class="fa fa-instagram"></i></a>
	            <a class="text-lighten-4 right btn-social" href="#!"><i class="fa fa-twitter-square"></i></a>
	            <a class="text-lighten-4 right btn-social" href="#!"><i class="fa fa-facebook-square"></i></a>
            </div>
      	</div>
    </footer>
	<script src="/js/jquery-2.2.1.min.js"></script>
	<script src="/js/materialize.min.js"></script>
	<script src="/js/app.js"></script>
</body>
</html>
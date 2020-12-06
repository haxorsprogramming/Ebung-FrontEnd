<!DOCTYPE html>
<html>
<head>
	<title>Register - Ebunga</title>
	<meta charset="utf-8">
	<!-- bootstrap vs fontawesome-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('ladun/registerpage/css/style-about.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('ladun/registerpage/css/style-res-about.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('ladun/registerpage/css/style-faq.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('ladun/registerpage/css/style-login.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('ladun/registerpage/css/style-fix-nav.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('ladun/registerpage/css/style-form-search-mobile.css') }}">
		<!-- slick -->
		<script src="https://www.google.com/recaptcha/api.js"></script>
	<!-- GG FONT -->
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
<header class="container" id="header-v3">
	
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 logo"><a href="{{ url('') }}"><img src="{{ asset('ladun/homepage/pic_asset/logo/logo.png') }}" alt="img-holiwood"></a></div>
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 menu-mobile">
				<div class=" collapse navbar-collapse" id="myNavbar">

				<form class="hidden-lg hidden-md form-group form-search-mobile">
					<input type="text" name="search" placeholder="Search here..." class="form-control">
					<button type="submit"><img src="{{ asset('ladun/homepage/pic_asset/util/Search.png') }}" alt="search" class="img-responsive"></button>
				</form>
				
				@include('layout.navbar_menu')
					
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-10 col-xs-9">
				<ul class="nav navbar-nav navbar-right icon-menu">
					
					
					<li id="input-search" class="hidden-sm hidden-xs">
					<a href="#"><img id="search-img" src="{{ asset('ladun/homepage/pic_asset/util/Search.png') }}" alt="img-holiwood"></a>
					</li>
					<li class="icon-user hidden-sm hidden-xs"><a href="#"><i class="far fa-user"></i></a></li>
					<li class="dropdown cart-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://landing.engotheme.com/html/jenstore/demo/img/cart.png" id="img-cart" alt="img-holiwood"></a>
				<div class="dropdown-menu">
					<div class="cart-1">
						<div class="img-cart"><img src="http://landing.engotheme.com/html/jenstore/demo/img/collec-1.jpg" class="img-responsive" alt="img-holiwood"></div>
						<div class="info-cart">
							<h1>Pink roses</h1>
							<span class="number">x1</span>
							<span class="prince-cart">$207.2</span>
						</div>
					</div>
					<div class="cart-1">
						<div class="img-cart"><img src="http://landing.engotheme.com/html/jenstore/demo/img/collec-1.jpg" class="img-responsive" alt="img-holiwood"></div>
						<div class="info-cart">
							<h1>Eleganr by BloomNation</h1>
							<span class="number">x1</span>
							<span class="prince-cart">$207.2</span>
						</div>
					</div>
					<div class="cart-1">
						<div class="img-cart"><img src="http://landing.engotheme.com/html/jenstore/demo/img/collec-1.jpg" class="img-responsive" alt="img-holiwood"></div>
						<div class="info-cart">
							<h1>Queen Rose - Yellow</h1>
							<span class="number">x1</span>
							<span class="prince-cart">$207.2</span>
						</div>
					</div>
					<div class="total">
						<span>Total:</span>
						<span>$621.6</span>
					</div>
					<div id="div-cart-menu">
						<a href="#">ADD TO CART</a>
						<a href="#" class="check">CHECK VIEW</a>
					</div>
				</div>
			</li>
				</ul>
			</div>
			<div class="navbar-header mobile-menu">
    					<button type="button" class="navbar-toggle btn-menu-mobile" data-toggle="collapse" data-target="#myNavbar">
    					    <i class="fas fa-bars"></i>                 
   					   	</button>
   		</div>
		</div>
		
</header>
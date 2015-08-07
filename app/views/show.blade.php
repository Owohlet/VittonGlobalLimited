<!DOCTYPE html>
<html>
<head>
	
	<title>Vitton Global Limited</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/fontello.css') }}
	{{ HTML::style('css/mystyle.css') }}
	{{ HTML::style('css/shop_slider.css') }}
	{{ HTML::style('css/slider.css') }}
	{{ HTML::style('css/slider_2.css') }}
	{{ HTML::style('css/sub_slider.css') }}
	{{ HTML::style('css/twitter_slider.css') }}
	{{ HTML::style('css/slide_background.css') }}
	{{ HTML::style('css/shop_slider_background.css') }}
	{{ HTML::style('css/subpage_banners.css') }}
	{{ HTML::style('css/jrating.jquery.css') }}
	{{ HTML::script('js/modernizr.js') }}
	{{ HTML::script('js/bootstrap.js') }}
	<!--[if IE 9]><link rel="stylesheet" type="text/css" href="_/css/ie9.css"><![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
	<!-- // <script type="text/javascript" src="_/js/modernizr.js"></script> -->
	<!-- // <script type="text/javascript" src="_/js/bootstrap.js"></script> -->
	<!-- // <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&amp;sensor=false"></script> -->
	<!-- // <script type="text/javascript" src="_/js/google_map.js"></script></head> -->
	<body class="portfolio-detail-page">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col col-sm-12">
						<div class="navbar-header">
							<!--div class="visible-xs panel-mobile"><a href="shop_view_cart.html">Cart</a><span>|</span><a href="#" class="md-trigger" data-modal="login-modal" onClick="return false;">Login</a></div-->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bars"></span>
								<span class="icon-bars"></span>
								<span class="icon-bars"></span>
							</button>
							<a class="navbar-brand" href="index.html#"><img src="/images/main_slide/vitton-logo.jpg" alt="Logo"></a>
						</div>
						<div class="collapse navbar-collapse" id="mynavbar">
							<div class="left-cell">
								<ul class="nav navbar-nav">
									<li class="active dropdown">
										{{HTML::link('/', 'Home', array('class'=>'dropdown-toggle')) }}
										<!-- <a href="/"  class="dropdown-toggle" data-toggle="dropdown">Home</a> -->
										<ul class="dropdown-menu">
											<li><h5 class="menuTitle">{{HTML::link('/', 'Home') }}</h5></li>
											
											
										</ul>							
									</li>
									<!-- <li class="dropdown">
										<a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Shop</a>
										<ul class="dropdown-menu">
											<li><h5 class="menuTitle">Shop</h5></li>
											
										</ul>
									</li>	 -->					
									<li class="dropdown">
										{{HTML::link('/order', 'Make an Order', array('class'=>'dropdown-toggle')) }}
										<!-- <a href="/order" class="dropdown-toggle">Make an Order</a> -->
										<ul class="dropdown-menu">
											<li><h5 class="menuTitle">{{HTML::link('/order', 'Order') }}</h5></li>
											
										</ul>
									</li>
									<li class="dropdown">
										{{HTML::link('/portfolio', 'Portfolio', array('class'=>'dropdown-toggle')) }}
										<!-- <a href="/portfolio" class="dropdown-toggle">Portfolio</a> -->
										<ul class="dropdown-menu">
											<li><h5 class="menuTitle">{{HTML::link('/portfolio', 'Portfolio') }}</h5></li>
											<!-- <li><a href="portfolio_4_col.html">Portfolio 4 Column</a></li>
											<li><a href="portfolio_5_col.html">Portfolio 5 Column</a></li>
											<li><a href="portfolio_with_desc.html">Portfolio with Description</a></li>
											<li><a href="portfolio_detail.html">Portfolio Detail</a></li> -->
										</ul>
										
									</li>
									<li class="dropdown">
										{{HTML::link('/contact', 'Contact Us') }}
										<ul class="dropdown-menu">
											<li><h5 class="menuTitle">{{HTML::link('/contact', 'Contact') }}</h5></li>

										</ul>
									</li>
									<!-- <li>
										<a href="404_page.html">404 Page</a>
									</li> -->	
								</ul>
							</div>
							<div class="right-cell">
								<form class="navbar-form navbar-right">
									<ul>
										<li>
											<div class="popup_form hide-me-first">
												<!-- <input type="text" class="form-control" placeholder="Search"> -->
											</div>
											<!-- <a class="search_btn"><i class="icon-search"></i></a>								 -->
										</li>
									</ul>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<!-- Main Navigation -->  		
		<div class="blog_classic">
			<section class="subpage-banner portfolio-4-col-banner" style="margin-bottom: 50px;">
				<div class="container">
					<div class="row header-group">
						<div class="col-sm-8 col-sm-12">
							<h1>Product</h1>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p> -->
						</div>
						<div class="col-xs-4 hidden-xs">
							<ol class="breadcrumb">
								<li>{{HTML::link('/', 'Home') }}</li>
								<li>{{HTML::link('/portfolio', 'Portfolio') }}</li>
								<li class="active">Product</li>
							</ol>			
						</div>		
					</div>
				</div>	
			</section>	
			<div class="container">
				<div class="row">
					<h3 class="text-center">{{$photo->title}}</h3>
					<br>
					<div class="col-md-6">
						<img src="{{'/'.$photo->path }}" style="width: 500px;height: auto;" class="img-responsive">
					</div>
					<div class="col-md-6">
						<div>
							<p>{{$photo->description}}</p>
							{{HTML::link('/order', 'Order Now', array('class' => 'btn-buynow')) }}
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="col-xs-12 text-center">
				{{HTML::link('/order', 'Order Now', array('class' => 'btn-buynow')) }}
			</div> -->
			<br>
			<br>
			<div class="section-head">
				<header class="col col-xs-12 centered">
					<section>
						<h2>More related Products</h2>
					</section>
					<hr>
					<p class="descriptionText"></p>
				</header>
			</div>	

			<div class="row">
				<div class="container">
					@foreach($related as $photo)
					<div class="col-md-3">
						<a  href="{{ action('UserController@show', $photo->id) }}" >
							<img src="{{'/'.$photo->path }}" style="width: 200px;height: auto;" class="img-responsive">
							<p class="">{{$photo->title}}</p>
						</a>
					</div>
					@endforeach
				</div>
			</div>
			<br>
		</div>	<!-- Bottom Section -->
		<section class="bottom_section">
			<div class="container">
				<div class="row">

					<div class=" about-us">
						<div class="row">
							<div class="section-head">
								<header class="col col-sm-12 centered">
									<h2>About VITTON</h2>
									<hr>
								</header>
							</div>	
						</div>
						<div class="row">
							<div class="col-lg-12">
								<!-- <div class="text-center">
									<h1><img src="/images/krypton_logo_white.png" alt="" /> KRYPTON</h1>
								</div> -->
								<p>Vitton Global Limited was incorporated in December 2013, We are manufacturers and suppliers of customized products. We currently serve transportation, industrial, governmental and non-governmental sectors of the Nigerian business environment. Using domestic and global sourcing to supply required services and providing outstanding solutions to our clients, we are building a global brand through the supply and manufacturing of innovative products and services.</p>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	
		<footer>
			<section class="container footer-section">
				<div class="col-lg-5 col-xs-12"><p>&copy; 2015 Vitton Global Limited. All right reserved</p></div>
				<div class="col-lg-7 footer-menu">
					<ul class="nav nav-pills">
						<li><a href="index.html" title="Home" class="active">{{HTML::link('/', 'Home') }}</a></li>
						<li><a href="index_shop_1.html" title="Order">{{HTML::link('/order', 'Order') }}</a></li>
						<!-- <li><a href="http://detheme.com/krypton/blog_3_column.html" title="Blog">Blog</a></li> -->
						<li><a href="portfolio_4_col.html" title="Portfolio">{{HTML::link('/portfolio', 'Portfolio') }}</a></li>
						<li><a href="contact.html" title="Contact Us">{{HTML::link('/contact', 'Contact us') }}</a></li>
						<!-- <li><a href="http://detheme.com/krypton/404.html" title="404 Page">404 Page</a></li> -->
					</ul>
				</div>
			</section>
			<section class="ss-style-doublediagonal" data-type="background" data-speed="10"></section>
		</footer>
		
		


		<div class="md-overlay"></div>
		<div class="jquery-media-detect"></div>	
		{{ HTML::script('js/jrating.jquery.js') }}
		{{ HTML::script('js/myscript.js') }}
		{{ HTML::script('js/modal_effects.js') }}
		<!-- // <script type="text/javascript" src="_/js/jrating.jquery.js"></script> -->
		<!-- // <script type="text/javascript" src="_/js/myscript.js"></script> -->
		<!-- // <script type="text/javascript" src="_/js/modal_effects.js"></script>    -->
	</body>
	</html>
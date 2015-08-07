<!DOCTYPE html>
<html>
<head>
	
	<title>Vitton Global Limited</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/animate.css') }}
	{{ HTML::style('font-awesome-4.3.0/css/font-awesome.min.css') }}
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
</head>
	<!-- <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="_/css/fontello.css" rel="stylesheet" media="screen">
	<link href="_/css/mystyle.css" rel="stylesheet" media="screen">
	<link href="_/css/shop_slider.css" rel="stylesheet" media="screen">
	<link href="_/css/slider.css" rel="stylesheet" media="screen">
	<link href="_/css/slider_2.css" rel="stylesheet" media="screen">
	<link href="_/css/sub_slider.css" rel="stylesheet" media="screen">
	<link href="_/css/twitter_slider.css" rel="stylesheet" media="screen">
	<link href="_/css/slide_background.css" rel="stylesheet" media="screen">
	<link href="_/css/shop_slider_background.css" rel="stylesheet" media="screen">
	<link href="_/css/subpage_banners.css" rel="stylesheet" media="screen">
	<link href="_/css/jrating.jquery.css" rel="stylesheet" media="screen"> -->
	<!--[if IE 9]><link rel="stylesheet" type="text/css" href="_/css/ie9.css"><![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
	<!-- // <script type="text/javascript" src="_/js/modernizr.js"></script> -->
	<!-- // <script type="text/javascript" src="_/js/bootstrap.js"></script> -->
	<!-- // <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&amp;sensor=false"></script> -->
	<!-- // <script type="text/javascript" src="_/js/google_map.js"></script></head> -->
	<body class="home">
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
		<div class="mainbanner">
			<div id="sequence">
				<span class="sequence-prev"><i class="fa fa-angle-left"></i></span>
				<span class="sequence-next"><i class="fa fa-angle-right"></i></span>
				<ul class="sequence-canvas">
					<li class="slide-frame">
						<div class="slide-bg slide-bg1"></div>
						<div class="slide-logo text-center">
							<img src="/images/main_slide/vt-600.fw.png" alt="Logo">
						</div>
						<div class="slide-title">
							<p class="webly"> The best LED displays<br> for concerts</p>
						</div>
						<div class="slide-text">
							<p class="webly">We do not see ourselves as just designers but as a deliverer of ideas</p>
						</div>
						<div class="slide-button">
							<a >{{HTML::link('/portfolio', 'Take a Tour', array('class' => 'btn-cta')) }}</a>
						</div>
					</li><!-- Frame 1 -->
					<li class="slide-frame">
						<div class="slide-bg slide-bg2"></div>
						<div class="slide-logo text-center">
							<img  src="/images/main_slide/vt-600.fw.png" alt="Logo">
						</div>
						<div class="slide-title">
							<p class="webly">Electronic billboards <br> for adverts</p>
						</div>
						<div class="slide-text">
							<p class="webly">Good design is all about making into reality what was only a concept</p>
						</div>
						<div class="slide-button">
							<a >{{HTML::link('/portfolio', 'Take a Tour', array('class' => 'btn-cta')) }}</a>
						</div>
					</li> <!-- Frame 2 -->
					<li class="slide-frame">
						<div class="slide-bg slide-bg3"></div>
						<div class="slide-logo text-center">
							<img  src="/images/main_slide/vt-600.fw.png" alt="Logo">
						</div>
						<div class="slide-title">
							<p class="webly">Excellent Stainless steel<br> fabrications</p>
						</div>
						<div class="slide-text">
							<p class="webly">Manufacturing is science, but visualization is an art!</p>
						</div>
						<div class="slide-button">
							<a >{{HTML::link('/portfolio', 'Take a Tour', array('class' => 'btn-cta')) }}</a>
						</div>
					</li><!-- Frame 3 -->
					<li class="slide-frame">
						<div class="slide-bg slide-bg4"></div>
						<div class="slide-logo text-center">
							<img src="/images/main_slide/vt-600.fw.png" alt="Logo">
						</div>
						<div class="slide-title">
							<p class="webly">Solar lights <br> for bus shelters</p>
						</div>
						<div class="slide-text">
							<p class="webly">Every child is an artist. The challenge is to remain an artist after you grow up -Picasso</p>
						</div>
						<div class="slide-button">
							<a >{{HTML::link('/portfolio', 'Take a Tour', array('class' => 'btn-cta')) }}</a>
						</div>
					</li><!-- Frame 4 -->
				</ul>
			</div>
		</div>
		<!-- Main Banner -->	

		<div class="grid-icon-container scroll-target">
			<section class="container grid-icon">
				<div class="row">
					<div class="col col-sm-6 col-md-3 wow slideInLeft">
						<span><i class="fa fa-cart-arrow-down"></i></span>
						<h4>MAKE AN ORDER</h4>
						<p>You can place an order either from the site or contact us via mail or call us</p>
					</div>
					<!-- <div class="col col-sm-6 col-md-3" data-uk-scrollspy="{cls:'uk-animation-fade', delay:300}">
						<span><i class="icon-rocket"></i></span>
						<h4>Blazing Fast Deployment</h4>
						<p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis</p>
					</div> -->
					<div class="col col-sm-6 col-md-3 wow slideInLeft ">
						<span><i class="fa fa-file-text-o"></i></span>
						<h4>SPECIFICATION</h4>					
						<p>You can make specifications and customize your product to your taste</p>
					</div>
					<div class="col col-sm-6 col-md-3 wow slideInRight" >
						<span><i class="fa fa-cog"></i></span>
						<h4>FABRICATION</h4>
						<p>We then build your product with your specs while you approve our designs</p>
					</div>
					<div class="col col-sm-6 col-md-3 wow slideInRight" >
						<span><i class="fa fa-rocket"></i></span>
						<h4>DEPLOYMENT</h4>
						<p>We then help you install and mount your product and get it ready to go!	</p>
					</div>
				</div>
			</section>
			<svg id="bigTriangleColor" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none">
				<path d="M0 0 L50 100 L100 0 Z" />
			</svg>
		</div>
		<!-- Grid Icon -->
		<!-- <section class="container" id="vertical_slider">
			<div class="row section-head">
				<header class="col col-sm-12 centered">
					<section>
						<p>We aren’t designing photocopies of web pages, we’re designing web pages</p>
						<h2>Easiest HTML Theme to customize evar!</h2>
					</section>
					<hr>
					<p class="descriptionText">Design is the fundamental soul of a human-made creation that ends up expressing itself in successive outer layers of the product or service</p>
				</header>
			</div>
			<div class="cn_wrapper row">
				<div id="cn_list" class="cn_list col col-xs-4" data-uk-scrollspy="{cls:'uk-animation-slide-left'}">
					<div class="cn_page" style="display:block;">
						<div class="cn_item selected">
							<div class="row">
								<div class="col col-sm-2 vs_icon">
									<i class="icon-rocket"></i>
								</div>
								<div class="col col-sm-10 vs_text">
									<h2 class="vs_title">Unlimited Colors</h2>
									<p class="vs_description">Adipiscing Purus</p>
								</div>
							</div>
						</div>
						<div class="cn_item">
							<div class="row">
								<div class="col col-sm-2 vs_icon">
									<i class="icon-camera"></i>
								</div>
								<div class="col col-sm-10 vs_text">
									<h2 class="vs_title">Font Customizer</h2>
									<p class="vs_description">Porta Venenatis</p>
								</div>
							</div>
						</div>
						<div class="cn_item">
							<div class="row">
								<div class="col col-sm-2 vs_icon">
									<i class="icon-user-male"></i>
								</div>
								<div class="col col-sm-10 vs_text">
									<h2 class="vs_title">Browser Compatibility</h2>
									<p class="vs_description">Dapibus Ipsum</p>
								</div>
							</div>
						</div>
						<div class="cn_item">
							<div class="row">
								<div class="col col-sm-2 vs_icon">
									<i class="icon-mobile-1"></i>
								</div>
								<div class="col col-sm-10 vs_text">
									<h2 class="vs_title">Unparalelled Support</h2>
									<p class="vs_description">Pellentesque Etiam</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="cn_preview" class="cn_preview col col-xs-8">
					<div class="cn_content" style="top:0;" data-uk-scrollspy="{cls:'uk-animation-slide-right', delay:300}">
						<img class="img-responsive" src="/images/vertical-slider/vertical_tab01.png" alt="Image1" />
						<div class="vs-text-preview visible-sm visible-xs">
							<h2 class="vs_title">Unlimited Colors</h2>
							<p class="vs_description">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>					
						</div>
					</div>
					<div class="cn_content">
						<img class="img-responsive" src="/images/vertical-slider/vertical_tab02.png" alt="Image2" />
						<div class="vs-text-preview visible-sm visible-xs">
							<h2 class="vs_title">Font Customizer</h2>
							<p class="vs_description">Sed posuere consectetur est at lobortis faucibus dolor auctor.</p>					
						</div>				
					</div>
					<div class="cn_content">
						<img class="img-responsive" src="/images/vertical-slider/vertical_tab03.png" alt="Image3" />
						<div class="vs-text-preview visible-sm visible-xs">
							<h2 class="vs_title">Browser Compatibility</h2>
							<p class="vs_description">Nullam quis risus eget urna mollis ornare vel eu leo.</p>					
						</div>				
					</div>
					<div class="cn_content">
						<img class="img-responsive" src="/images/vertical-slider/vertical_tab04.png" alt="Image4" />
						<div class="vs-text-preview visible-sm visible-xs">
							<h2 class="vs_title">Unparalleled Support</h2>
							<p class="vs_description">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>					
						</div>				
					</div>
				</div>
			</div>
		</section> -->
		<!-- Vertical Slider -->	<!-- Buy Now Section -->
		
		<!-- /Buy Now Section -->	

		<section class="container recent_blog_post col-md-12">
			<div class="row">
				<div class="section-head">
					<header class="col col-sm-12 centered">
						<section>

							<h2>OUR RECENT PORTFOLIO</h2>
						</section>
						<hr>

					</header>
				</div>	
			</div>
			<div class="row" >
				<div id="recent-blog-post" class="owl-carousel">
					@foreach($recentseven as $photo)

					<div class="col-xs-12 md-trigger" onClick="return false;" id= "main-image" data-modal="modal_detail_portfolio_3">
						<a href="">
							<img src="/{{$photo->path}}" alt="" class="img-responsive prd-img" desc="{{$photo->description}}" title="{{$photo->title}}" me="{{$photo->id}}"/>
						</a>
					</div>
					@endforeach

					

					<!-- <div class="col-xs-12 md-trigger" onClick="return false;" data-modal="modal_detail_portfolio_4">
						<a href="">
							<img src="/images/portfolio/portfolio_4.jpg" alt="" class="img-responsive" />
						</a>
					</div>
					<div class="col-xs-12 md-trigger" onClick="return false;" data-modal="modal_detail_portfolio_5">
						<a href="">
							<img src="/images/portfolio/portfolio_4.jpg" alt="" class="img-responsive" />
						</a>
					</div>
					<div class="col-xs-12 md-trigger" onClick="return false;" data-modal="modal_detail_portfolio_6">
						<a href="">
							<img src="/images/portfolio/portfolio_4.jpg" alt="" class="img-responsive" />
						</a>
					</div>
					<div class="col-xs-12 md-trigger" onClick="return false;" data-modal="modal_detail_portfolio_7">
						<a href="">
							<img src="/images/portfolio/portfolio_4.jpg" alt="" class="img-responsive" />
						</a>
					</div>
					<div class="col-xs-12 md-trigger" onClick="return false;" data-modal="modal_detail_portfolio_8">
						<a href="">
							<img src="/images/portfolio/portfolio_4.jpg" alt="" class="img-responsive" />
						</a>
					</div> -->
				</div>
				<div class="owl-carousel-navigation">
					<a class="btn btn-owl prev"></a>
					<a class="btn btn-owl next"></a>
				</div>
				<br>
				<div class="text-center">
					<!--button type="button" class="btn btn-primary btn-lg">Buy Now</button-->
					<a class="btn-buynow text-center">{{HTML::link('/portfolio', 'View all') }}</a>
				</div>
			</div> 
		</section>	
		<!-- @foreach($recentseven as $photo) -->
		<!--modal-->
		<div id="modal_detail_portfolio_3" class="popup-gallery md-modal md-effect-15">
			<div class="md-content">
				<img src="" id="modalimage" class="img-responsive" alt=""/>
				<div class="md-description">
					<p id="prdmodaldescr"></p>
					{{HTML::link('/portfolio', 'View all', array('class'=>'btn-buynow', 'style'=>'color:wheat')) }}
				</div>
				<button class="button md-close right btn-cross"><i class="fa fa-times"></i></button>
			</div>
		</div>

		<!-- @endforeach -->
		<!-- <div id="modal_detail_portfolio_4" class="popup-gallery md-modal md-effect-15">
			<div class="md-content">
				<img src="/images/portfolio/4.jpg" class="img-responsive" alt=""/>
				<div class="md-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora, veritatis, amet fugit. </p>
				</div>
				<button class="button md-close right btn-cross"><i class="icon-cancel"></i></button>
			</div>
		</div>
		<div id="modal_detail_portfolio_5" class="popup-gallery md-modal md-effect-15">
			<div class="md-content">
				<img src="/images/portfolio/4.jpg" class="img-responsive" alt=""/>
				<div class="md-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora, veritatis, amet fugit. </p>
				</div>
				<button class="button md-close right btn-cross"><i class="icon-cancel"></i></button>
			</div>
		</div>
		<div id="modal_detail_portfolio_6" class="popup-gallery md-modal md-effect-15">
			<div class="md-content">
				<img src="/images/portfolio/4.jpg" class="img-responsive" alt=""/>
				<div class="md-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora, veritatis, amet fugit. </p>
				</div>
				<button class="button md-close right btn-cross"><i class="icon-cancel"></i></button>
			</div>
		</div>
		<div id="modal_detail_portfolio_7" class="popup-gallery md-modal md-effect-15">
			<div class="md-content">
				<img src="/images/portfolio/4.jpg" class="img-responsive" alt=""/>
				<div class="md-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora, veritatis, amet fugit. </p>
				</div>
				<button class="button md-close right btn-cross"><i class="icon-cancel"></i></button>
			</div>
		</div>
		<div id="modal_detail_portfolio_8" class="popup-gallery md-modal md-effect-15">
			<div class="md-content">
				<img src="/images/portfolio/4.jpg" class="img-responsive" alt=""/>
				<div class="md-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora, veritatis, amet fugit. </p>
				</div>
				<button class="button md-close right btn-cross"><i class="icon-cancel"></i></button>
			</div>
		</div> -->
		<!-- modal Ends-->
		
		<section class="buy_now" data-type="background" data-speed="3">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
						<h4>Want to cut to the chase? why not order now!</h4>
						<p>By simply clicking the order now button you get to start talking to us about the product you want</p>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<!--button type="button" class="btn btn-primary btn-lg">Buy Now</button-->
						<!-- <a class="btn-buynow">Order Now</a> -->
						{{HTML::link('/order', 'Order Now', array('class' => 'btn-buynow')) }}
					</div>
				</div> 
			</div>
		</section>
		<section class="">
			<div class="container profile_team">
				<div class="row">
					<div class="section-head">
						<header class="col col-sm-12 centered">
							<section>
								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p> -->
								<h2>MEET THE EXEC</h2>
							</section>
							<hr>
						</header>
					</div>	
				</div>


				<div class="row">
					<div class="profile col-lg-4  col-sm-6 col-xs-12 uk-scrollspy-init-inview uk-scrollspy-inview uk-animation-fade" data-uk-scrollspy="{cls:'uk-animation-fade'}">
						<figure>
							<div class="top-image">
								<img src="/images/jideofor1.jpg" class="img-responsive" alt="how to create break fast food delicious">
							</div>
							<figcaption>
								<h3><span class="profile-heading">JIDEOFOR OKEKE</span></h3>
								<span class="profile-subheading">EXECUTIVE DIRECTOR</span>
								<!-- <p>Lorem ipsum dolor sit amet, consectetur.</p> -->
								<ul class="profile-scocial">
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<!-- <li><a href="#" class="icon-gplus"></a></li>
									<li><a href="#" class="icon-mail-alt"></a></li> -->
								</ul>
								<div class="figcap"></div>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-8 col-sm-6 col-xs-12">
						<blockquote>Hi, I'm Jideofor. I want to personally welcome you to Vitton Global Limited. For us customer service is not a department but a way of life. We see ourselves as deliverers of Ideas. You think it, we build it. Take a tour through our {{HTML::link('/portfolio', 'portfolio') }} and let us know what you want </blockquote>
						
					</div>

				<!-- <div class="profile col-lg-4  col-sm-6 col-xs-12" data-uk-scrollspy="{cls:'uk-animation-fade'}">
					<figure>
						<div class="top-image">
							<img src="/images/profile_1.jpg" class="img-responsive" alt="how to create break fast food delicious"/>
						</div>
						<figcaption>
							<h3><span class="profile-heading">SLAMET WIDOSO</span></h3>
							<span class="profile-subheading">Art Director</span>
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
							<ul class="profile-scocial">
								<li><a href="index.html#" class="icon-facebook"></a></li>
								<li><a href="index.html#" class="icon-twitter"></a></li>
								<li><a href="index.html#" class="icon-gplus"></a></li>
								<li><a href="index.html#" class="icon-mail-alt"></a></li>
							</ul>
							<div class="figcap"></div>
						</figcaption>
					</figure>
				</div>	

				<div class="profile col-lg-4  col-sm-6 col-xs-12" data-uk-scrollspy="{cls:'uk-animation-fade', delay:600}">
					<figure>
						<div class="top-image">
							<img src="/images/profile_2.jpg" class="img-responsive" alt="how to create break fast food delicious"/>
						</div>
						<figcaption>
							<h3><span class="profile-heading">MARKABL</span></h3>
							<span class="profile-subheading">Art Director</span>
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
							<ul class="profile-scocial">
								<li><a href="index.html#" class="icon-facebook"></a></li>
								<li><a href="index.html#" class="icon-twitter"></a></li>
								<li><a href="index.html#" class="icon-gplus"></a></li>
								<li><a href="index.html#" class="icon-mail-alt"></a></li>
							</ul>
							<div class="figcap"></div>
						</figcaption>
					</figure>
				</div>	

				<div class="profile col-lg-4  col-sm-6 col-xs-12" data-uk-scrollspy="{cls:'uk-animation-fade', delay:1200}">
					<figure>
						<div class="top-image">
							<img src="/images/profile_3.jpg" class="img-responsive" alt="how to create break fast food delicious"/>
						</div>
						<figcaption>
							<h3><span class="profile-heading">Koralia Vassilis</span></h3>
							<span class="profile-subheading">Art Director</span>
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
							<ul class="profile-scocial">
								<li><a href="index.html#" class="icon-facebook"></a></li>
								<li><a href="index.html#" class="icon-twitter"></a></li>
								<li><a href="index.html#" class="icon-gplus"></a></li>
								<li><a href="index.html#" class="icon-mail-alt"></a></li>
							</ul>
							<div class="figcap"></div>
						</figcaption>
					</figure>
				</div>	
				<div class="profile col-lg-4  col-sm-6 col-xs-12" data-uk-scrollspy="{cls:'uk-animation-fade', delay:300}">
					<figure>
						<div class="top-image">
							<img src="/images/profile_4.jpg" class="img-responsive" alt="how to create break fast food delicious"/>
						</div>
						<figcaption>
							<h3><span class="profile-heading">Gallus</span></h3>
							<span class="profile-subheading">Art Director</span>
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
							<ul class="profile-scocial">
								<li><a href="index.html#" class="icon-facebook"></a></li>
								<li><a href="index.html#" class="icon-twitter"></a></li>
								<li><a href="index.html#" class="icon-gplus"></a></li>
								<li><a href="index.html#" class="icon-mail-alt"></a></li>
							</ul>
							<div class="figcap"></div>
						</figcaption>
					</figure>
				</div>	
				<div class="profile col-lg-4  col-sm-6 col-xs-12" data-uk-scrollspy="{cls:'uk-animation-fade', delay:1400}">
					<figure>
						<div class="dt-top-image">
							<img src="/images/profile_5.jpg" class="img-responsive" alt="how to create break fast food delicious"/>
						</div>
						<figcaption>
							<h3><span class="profile-heading">Adomas</span></h3>
							<span class="profile-subheading">Art Director</span>
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
							<ul class="profile-scocial">
								<li><a href="index.html#" class="icon-facebook"></a></li>
								<li><a href="index.html#" class="icon-twitter"></a></li>
								<li><a href="index.html#" class="icon-gplus"></a></li>
								<li><a href="index.html#" class="icon-mail-alt"></a></li>
							</ul>
							<div class="figcap"></div>
						</figcaption>
					</figure>
				</div>	
				<div class="profile col-lg-4  col-sm-6 col-xs-12" data-uk-scrollspy="{cls:'uk-animation-fade', delay:900}">
					<figure>
						<div class="top-image">
							<img src="/images/profile_6.jpg" class="img-responsive" alt="how to create break fast food delicious"/>
						</div>
						<figcaption>
							<h3><span class="profile-heading">Edvard Herod</span></h3>
							<span class="profile-subheading">Art Director</span>
							<p>Lorem ipsum dolor sit amet, consectetur.</p>
							<ul class="profile-scocial">
								<li><a href="index.html#" class="icon-facebook"></a></li>
								<li><a href="index.html#" class="icon-twitter"></a></li>
								<li><a href="index.html#" class="icon-gplus"></a></li>
								<li><a href="index.html#" class="icon-mail-alt"></a></li>
							</ul>
							<div class="figcap"></div>
						</figcaption>
					</figure>
				</div> -->	
			</div>
		</div>
	</section>



	<section class="map-image">
		<div class="container">
			<div class="row">
				<div class="col col-sm-12">
					<div class="section-head">
						<header class="centered">
							<section>
								
								<h2>Find Us!</h2>
							</section>
							<hr>
							<!-- <p class="descriptionText">Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue.</p> -->
						</header>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="map-image-area" data-type="background" data-speed="3">
		<div class="map">
			<div class="circle-address ">
				<section>
					<h1>9</h1> 
					Oremeji Avenue, Shasha Bameke, Egbeda,
					<hr>
					Lagos State,<br>
					Nigeria.
				</section>
			</div>
			<div class="map-info hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col col-sm-4">
							<div class="icon-container">
								<i class="fa fa-map-marker"></i>
							</div>
							<address class="address">
								No 9 Oremeji Avenue, Shasha Bameke, Egbeda, Lagos State, Nigeria.
							</address>
						</div>
						<div class="col col-sm-4">
							<div class="icon-container">
								<i class="fa fa-mobile"></i>
							</div>
							<div class="phone">
								+2348035868250 | +2348096668250
							</div>						
						</div>
						<div class="col col-sm-4">
							<div class="icon-container">
								<i class="fa fa-envelope-o"></i>
							</div>							
							<div class="email">
								<a>{{HTML::link('/contact', 'vittongloballtd@gmail.com') }} </a>
							</div>								
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>	
	<!-- Bottom Section -->
	<section class="bottom_section">
		<div class="container">
			<div class="row">
				<!-- <div class="col-lg-4 col-md-4 col-sm-4 ">
					<div class="row">
						<div class="section-head">
							<header class="col col-sm-12 centered">
								<h2 style="color: rgb(238, 238, 238);">Recent Post</h2>
								<hr/>

								<div id="recent-post" class="owl-carousel">
									<div class="owl-slide">
										<div class="row">
											<div class="mini-post">
												<img src="/images/post_1.jpg" alt="" />
												<p class="post-title"><a href="single_post.html" class="post-title">Lorem ipsum dolor sit amet amet jabang bayi</a></p>
												<a href="index.html#" class="author">March Antony</a> <span class="date">- July 16 2013</span>
											</div>
											<hr/>
										</div>	
										<div class="row">
											<div class="mini-post">
												<img src="/images/post_2.jpg" alt="" />
												<p class="post-title"><a href="single_post.html" class="post-title">Lorem ipsum dolor sit amet  amet mambune</a></p>
												<a href="index.html#" class="author">March Antony</a> - <span class="date">July 16 2013</span>
											</div>
											<hr/>
										</div>	
										<div class="row">
											<div class="mini-post">
												<img src="/images/post_3.jpg" alt="" />
												<p class="post-title"><a href="single_post.html" class="post-title">Lorem ipsum dolor sit amet  amet mambune</a></p>
												<a href="index.html#" class="author">March Antony</a> - <span class="date">July 16 2013</span>

											</div>
											<hr/>
										</div>	
									</div>

									<div class="owl-slide">
										<div class="row">
											<div class="mini-post">
												<img src="/images/post_4.jpg" alt="" />
												<p class="post-title"><a href="single_post.html" class="post-title">Lorem ipsum dolor sit amet  amet mambune</a></p>
												<a href="index.html#" class="author">March Antony</a> - <span class="date">July 16 2013</span>

											</div>
											<hr/>
										</div>	
										<div class="row">
											<div class="mini-post">
												<img src="/images/post_5.jpg" alt="" />
												<p class="post-title"><a href="single_post.html" class="post-title">Lorem ipsum dolor sit amet   amet mambune</a></p>
												<a href="index.html#" class="author">March Antony</a> - <span class="date">July 16 2013</span>

											</div>
											<hr/>
										</div>	
										<div class="row">
											<div class="mini-post">
												<img src="/images/post_6.jpg" alt="" />
												<p class="post-title"><a href="single_post.html" class="post-title">Lorem ipsum dolor sit amet  amet mambune</a></p>
												<a href="index.html#" class="author">March Antony</a> - <span class="date">July 16 2013</span>

											</div>
											<hr/>
										</div>	
									</div>
									<div class="owl-slide">
										<div class="row">
											<div class="mini-post">
												<img src="/images/post_7.jpg" alt="" />
												<p class="post-title"><a href="single_post.html" class="post-title">Lorem ipsum dolor sit amet  amet mambune</a></p>
												<a href="index.html#" class="author">March Antony</a> - <span class="date">July 16 2013</span>

											</div><hr/>
										</div>	
										<div class="row">
											<div class="mini-post">
												<img src="/images/post_8.jpg" alt="" />
												<p class="post-title"><a href="single_post.html" class="post-title">Lorem ipsum dolor sit amet  amet mambune</a></p>
												<p><a href="index.html#" class="author">March Antony</a> </p><span class="date">- July 16 2013</span>

											</div><hr/>
										</div>	
										<div class="row">
											<div class="mini-post">
												<img src="/images/post_9.jpg" alt="" />
												<p class="post-title"><a href="single_post.html" class="post-title">Lorem ipsum dolor sit amet  amet mambune</a></p>
												<a href="index.html#" class="author">March Antony</a> - <span class="date">July 16 2013</span>

											</div><hr/>
										</div>	
									</div>
									<div class="owl-slide">
										<div class="row">
											<div class="mini-post">
												<img src="/images/post_10.jpg" alt="" />
												<p class="post-title"><a href="single_post.html" class="post-title">Lorem ipsum dolor sit amet  amet mambune</a></p>
												<a href="index.html#" class="author">March Antony</a> - <span class="date">July 16 2013</span>

											</div><hr/>
										</div>	
										<div class="row">
											<div class="mini-post">
												<img src="/images/post_11.jpg" alt="" />
												<p class="post-title"><a href="single_post.html" class="post-title">Lorem ipsum dolor sit amet   amet mambune</a></p>
												<a href="index.html#" class="author">March Antony</a> - <span class="date">July 16 2013</span>

											</div><hr/>
										</div>	
										<div class="row">
											<div class="mini-post">
												<img src="/images/post_12.jpg" alt="" />
												<p class="post-title"><a href="single_post.html" class="post-title">Lorem ipsum dolor sit amet amet mambune</a></p>
												<a href="index.html#" class="author">March Antony</a> - <span class="date">July 16 2013</span>

											</div><hr/>
										</div>	
									</div>
								</div>

							</header>
						</div>	
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-4 recent-portfolio">
					<div class="row">
						<div class="section-head">
							<header class="col col-sm-12 centered">
								<h2>Recent Portfolio</h2>
								<hr>
							</header>
						</div>	
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<a href="portfolio_with_desc.html" class="thumbnail">
								<img src="/images/portfolio_th_01.jpg" alt="" />
							</a>
						</div>

						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<a href="portfolio_with_desc.html" class="thumbnail">
								<img src="/images/portfolio_th_02.jpg" alt="" />
							</a>
						</div>

						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<a href="portfolio_with_desc.html" class="thumbnail">
								<img src="/images/portfolio_th_03.jpg" alt="" />
							</a>
						</div>

						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<a href="portfolio_with_desc.html" class="thumbnail">
								<img src="/images/portfolio_th_04.jpg" alt="" />
							</a>
						</div>

						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<a href="portfolio_with_desc.html" class="thumbnail">
								<img src="/images/portfolio_th_05.jpg" alt="" />
							</a>
						</div>

						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<a href="portfolio_with_desc.html" class="thumbnail">
								<img src="/images/portfolio_th_06.jpg" alt="" />
							</a>
						</div>

						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<a href="portfolio_with_desc.html" class="thumbnail">
								<img src="/images/portfolio_th_07.jpg" alt="" />
							</a>
						</div>

						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<a href="portfolio_with_desc.html" class="thumbnail">
								<img src="/images/portfolio_th_08.jpg" alt="" />
							</a>
						</div>

						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<a href="portfolio_with_desc.html" class="thumbnail">
								<img src="/images/portfolio_th_09.jpg" alt="" />
							</a>
						</div>
					</div>
				</div> -->

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
						<ul class="profile-social">
							<a href="#" class="fa fa-facebook"></a> &nbsp
							<a href="#" class="fa fa-twitter"></a>
									<!-- <li><a href="#" class="icon-gplus"></a></li>
									<li><a href="#" class="icon-mail-alt"></a></li> -->
								</ul>
					</div>
				</div>
			</div>
		</section>	<footer>
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

	<!-- login & register form -->
	
	<div class="md-overlay"></div>
	<div class="jquery-media-detect"></div>	
	<!-- // <script src="js/wow.min.js"></script> -->
	{{ HTML::script('js/wow.js') }}
	<script>
		new WOW().init();
	</script>
	{{ HTML::script('js/newjs.js') }}
	{{ HTML::script('js/jrating.jquery.js') }}
	{{ HTML::script('js/myscript.js') }}
	{{ HTML::script('js/modal_effects.js') }}
<!-- <script type="text/javascript" src="_/js/jrating.jquery.js"></script>
<script type="text/javascript" src="_/js/myscript.js"></script>
<script type="text/javascript" src="_/js/modal_effects.js"></script>    -->
</body>
</html>	


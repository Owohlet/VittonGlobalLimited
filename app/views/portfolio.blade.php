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
			<section class="subpage-banner portfolio-4-col-banner">
				<div class="container">
					<div class="row header-group">
						<div class="col-sm-8 col-sm-12">
							<h1>Our Portfolio</h1>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p> -->
						</div>
						<div class="col-xs-4 hidden-xs">
							<ol class="breadcrumb">
								<li><a>{{HTML::link('/', 'Home') }}</a></li>
								<li class="active">Portfolio</li>
							</ol>			
						</div>		
					</div>
				</div>	
			</section>	


			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-12 portfolio-content">
								<!-- <div id="portfolio-carousel" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="item active">
											<img src="_/images/portfolio_detail/slide_1.jpg" alt="First slide">
										</div>
										<div class="item">
											<img src="_/images/portfolio_detail/slide_2.jpg" alt="Second slide">
										</div>
										<div class="item">
											<img src="_/images/portfolio_detail/slide_3.jpg" alt="Third slide">
										</div>
										<div class="item">
											<img src="_/images/portfolio_detail/slide_4.jpg" alt="Fourth slide">
										</div>
									</div>
									<a class="left carousel-control" href="portfolio_detail.html#portfolio-carousel" data-slide="prev">
										<span><i class="icon-left-open-big"></i></span>
									</a>
									<a class="right carousel-control" href="portfolio_detail.html#portfolio-carousel" data-slide="next">
										<span><i class="icon-right-open-big"></i></span>
									</a>
								</div>	 -->		
								<h2 class="portfolio-title">
									View Projects we have done
								</h2>
								<p>Click to see details</p>
								<!-- <div class="row meta-info">
									<div class="col-sm-6 col-md-3 info"><span><i class="icon-clock-circled"></i>29 January 2014</span></div>
									<div class="col-sm-6 col-md-3 info"><span><i class="icon-comment"></i>13 Comments</span></div>
									<div class="col-sm-6 col-md-3 info"><span><i class="icon-heart"></i>20 Likes</span></div>
									<div class="col-sm-6 col-md-3 info"><span><i class="icon-tags"></i>Technology</span></div>
								</div> -->
								<!-- <div class="portfolio-description">
									<p>
										Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
										Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
									</p>
								</div> -->
							</div>
						</div>
						<div class="row portfolio-gallery-container">
							<div class="col-sm-12 portfolio-gallery">

								@if ($photos->isEmpty())
								<p> Currently, there is no photo!</p>
								@else
								@foreach($photos as $photo)

								<div class="col-xs-12 col-sm-3">
									<a href="{{ action('UserController@show', $photo->id) }}" class="md-trigger">
										<img src="{{ $photo->path}}" alt="" class="img-responsive" />
									</a>
								</div>
								@endforeach
								@endif
								<!-- <div class="col-xs-12 col-sm-3">
									<a href="portfolio_detail.html#" onClick="return false;" data-modal="modal_detail_portfolio_2" class="md-trigger">
										<img src="/images/portfolio/portfolio_13.jpg" alt="" class="img-responsive" />
									</a>
								</div>
								<div class="col-xs-12 col-sm-3">
									<a href="portfolio_detail.html#" onClick="return false;" data-modal="modal_detail_portfolio_3" class="md-trigger">
										<img src="/images/portfolio/portfolio_4.jpg" alt="" class="img-responsive" />
									</a>
								</div>
								<div class="col-xs-12 col-sm-3">
									<a href="portfolio_detail.html#" onClick="return false;" data-modal="modal_detail_portfolio_4" class="md-trigger">
										<img src="/images/portfolio/portfolio_24.jpg" alt="" class="img-responsive" />
									</a>
								</div>
								<div class="col-xs-12 col-sm-3">
									<a href="portfolio_detail.html#" onClick="return false;" data-modal="modal_detail_portfolio_5" class="md-trigger">
										<img src="/images/portfolio/portfolio_20.jpg" alt="" class="img-responsive" />
									</a>
								</div>
								<div class="col-xs-12 col-sm-3">
									<a href="portfolio_detail.html#" onClick="return false;" data-modal="modal_detail_portfolio_6" class="md-trigger">
										<img src="/images/portfolio/portfolio_3.jpg" alt="" class="img-responsive" />
									</a>
								</div>
								<div class="col-xs-12 col-sm-3">
									<a href="portfolio_detail.html#" onClick="return false;" data-modal="modal_detail_portfolio_7" class="md-trigger">
										<img src="/images/portfolio/portfolio_8.jpg" alt="" class="img-responsive" />
									</a>
								</div>
								<div class="col-xs-12 col-sm-3">
									<a href="portfolio_detail.html#" onClick="return false;" data-modal="modal_detail_portfolio_8" class="md-trigger">
										<img src="/images/portfolio/portfolio_16.jpg" alt="" class="img-responsive" />
									</a>
								</div> -->

							</div>											
						</div>	
					</div>
				</div>			
			</div>
			<br>
			<div class="col-xs-12 text-center">
				<!--button type="button" class="btn btn-primary btn-lg">Buy Now</button-->
				<!-- <a class="btn-buynow">Order Now</a> -->
				{{HTML::link('/order', 'Order Now', array('class' => 'btn-buynow')) }}
			</div>
		</div>	<!-- Bottom Section -->
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
		<!-- popup detail portfolio -->
		<div id="modal_detail_portfolio_1" class="popup-gallery md-modal md-effect-15">
			<div class="md-content">
				<img src="/images/portfolio/11.jpg" class="img-responsive" alt=""/>
				<div class="md-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora, veritatis, amet fugit. </p>
				</div>
				<button class="button md-close right btn-cross"><i class="icon-cancel"></i></button>
			</div>
		</div>
		<div id="modal_detail_portfolio_2" class="popup-gallery md-modal md-effect-15">
			<div class="md-content">
				<img src="/images/portfolio/23.jpg" class="img-responsive" alt=""/>
				<div class="md-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora, veritatis, amet fugit. </p>
				</div>
				<button class="button md-close right btn-cross"><i class="icon-cancel"></i></button>
			</div>
		</div>
		<div id="modal_detail_portfolio_3" class="popup-gallery md-modal md-effect-15">
			<div class="md-content">
				<img src="/images/portfolio/4.jpg" class="img-responsive" alt=""/>
				<div class="md-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora, veritatis, amet fugit. </p>
				</div>
				<button class="button md-close right btn-cross"><i class="icon-cancel"></i></button>
			</div>
		</div>
		<div id="modal_detail_portfolio_4" class="popup-gallery md-modal md-effect-15">
			<div class="md-content">
				<img src="/images/portfolio/7.jpg" class="img-responsive" alt=""/>
				<div class="md-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora, veritatis, amet fugit. </p>
				</div>
				<button class="button md-close right btn-cross"><i class="icon-cancel"></i></button>
			</div>
		</div>
		<div id="modal_detail_portfolio_5" class="popup-gallery md-modal md-effect-15">
			<div class="md-content">
				<img src="/images/portfolio/20.jpg" class="img-responsive" alt=""/>
				<div class="md-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora, veritatis, amet fugit. </p>
				</div>
				<button class="button md-close right btn-cross"><i class="icon-cancel"></i></button>
			</div>
		</div>
		<div id="modal_detail_portfolio_6" class="popup-gallery md-modal md-effect-15">
			<div class="md-content">
				<img src="/images/portfolio/13.jpg" class="img-responsive" alt=""/>
				<div class="md-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora, veritatis, amet fugit. </p>
				</div>
				<button class="button md-close right btn-cross"><i class="icon-cancel"></i></button>
			</div>
		</div>
		<div id="modal_detail_portfolio_7" class="popup-gallery md-modal md-effect-15">
			<div class="md-content">
				<img src="/images/portfolio/8.jpg" class="img-responsive" alt=""/>
				<div class="md-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora, veritatis, amet fugit. </p>
				</div>
				<button class="button md-close right btn-cross"><i class="icon-cancel"></i></button>
			</div>
		</div>
		<div id="modal_detail_portfolio_8" class="popup-gallery md-modal md-effect-15">
			<div class="md-content">
				<img src="/images/portfolio/16.jpg" class="img-responsive" alt=""/>
				<div class="md-description">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, tempora, veritatis, amet fugit. </p>
				</div>
				<button class="button md-close right btn-cross"><i class="icon-cancel"></i></button>
			</div>
		</div>

		<!-- /popup detail portfolio -->
		<!-- login & register form -->
		<div id="login-modal" class="popup-gallery md-modal md-effect-1">
			<div class="md-content form">
				<h1>Sign In</h1>
				<div class="row form-body">
					<div class="col-xs-12">
						<form role="form" id="login-form" action="portfolio_detail.html#">
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" name="username"  required>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password1" >
							</div>
							<div class="row">
								<div class="dt-form-info col-xs-12 col-sm-8">
									<label>
										you don't have account?  <a href="portfolio_detail.html#" class="md-trigger" data-modal="register-modal" onClick="$('#login-modal').removeClass('md-show');return false;">Register</a>
									</label>
								</div>
								<div class="form-group col-xs-12 col-sm-4">
									<button type="submit" class="btn-submit">Sign In</button>	
								</div>
							</div>

						</form>
					</div>
				</div>

				<a href="portfolio_detail.html#" class="md-close right"><i class="icon-cancel"></i></a>
			</div>
		</div>
		<div id="register-modal" class="popup-gallery md-modal md-effect-1">
			<div class="md-content form">
				<h1>REGISTER</h1>
				<div class="row form-body">
					<div class="col-xs-12">
						<form role="form" id="register-form" action="portfolio_detail.html#">
							<div class="form-group">				    
								<input type="text" class="form-control" placeholder="username" name="username"  required>
							</div>
							<div class="form-group">				    
								<input type="text" class="form-control" placeholder="Full Name" name="fullname"  required>
							</div>
							<div class="form-group">				   
								<input type="tel" class="form-control" placeholder="Phone" name="phone" >
							</div>
							<div class="form-group">				    
								<input type="email" class="form-control" placeholder="Email" name="email"  required>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" name="password1" >
							</div>
							<div class="form-group">				   
								<input type="password" class="form-control" placeholder="Repeat Password" name="password2" >
							</div>


							<div class="row">
								<div class="dt-form-info col-xs-12 col-sm-8">
									<div class="checkbox">
										<label>
											<input type="checkbox">I Accept the <a href="portfolio_detail.html#">Term & Condition</a>
										</label>
									</div>
								</div>
								<div class="form-group col-xs-12 col-sm-4">
									<button type="submit" class="btn-submit">SUBMIT</button>	
								</div>
							</div>

						</form>
					</div>
				</div>

				<a href="portfolio_detail.html#" class="md-close right"><i class="icon-cancel"></i></a>
			</div>
		</div>


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
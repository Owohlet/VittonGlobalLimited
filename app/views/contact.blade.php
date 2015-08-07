<!DOCTYPE html>
<html>
<head>
	
	<title>Vitton Global Limited</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/fontello.css') }}
	{{ HTML::style('font-awesome-4.3.0/css/font-awesome.min.css') }}
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

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
	<!-- <script type="text/javascript" src="_/js/modernizr.js"></script> -->
	<!-- <script type="text/javascript" src="_/js/bootstrap.js"></script> -->
	<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&amp;sensor=false"></script> -->
	<!-- <script type="text/javascript" src="_/js/google_map.js"></script></head> -->
	<body class="blog">
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
		<div class="contact_page sidebar-right">
			<section class="subpage-banner contact-banner">
				<div class="container">
					<div class="row header-group">
						<div class="col-sm-8 col-sm-12">
							<h1>Contact Info</h1>
							
						</div>
						<div class="col-xs-4 hidden-xs">
							<ol class="breadcrumb">
								<li><a>{{HTML::link('/', 'Home') }}</a></li>
								<li class="active">Contact</li>
							</ol>			
						</div>		
					</div>
				</div>	
			</section>

			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<!-- Contact Form -->
						<section class="contact-form-blog">
							<div class="row">
								<div class="section-head">
									<header class="col col-xs-12 centered">
										<section>
											<h2>Drop us an email</h2>
										</section>
										<hr>
										<p class="descriptionText"></p>
									</header>
								</div>	
							</div>

							<ul class="errors">
								@foreach($errors->all('<li>:message</li>') as $message)
								{{ $message }}
								@endforeach
							</ul>

							<div class="row">
								<div class="col-xs-12">
									<!-- <form class="form-inline" role="form" id="dt-contact-form" action="http://detheme.com/krypton/sendemail.php"> -->
									{{ Form::open(['url'=> 'contact_request', 'method' => 'post', 'class'=>'form']) }}
									<div class="row">
										<div class="form-group col-xs-12 col-sm-4">
											<!-- <input type="text" class="form-control" name="inputFullname" id="inputFullname" placeholder="full name" required> -->
											{{Form::text('inputFullname', null, ['class'=>'form-control', 'placeholder'=>'full name']) }}
										</div>
										<div class="form-group col-xs-12 col-sm-4">
											<!-- <input type="email" class="form-control"  name="inputEmail" id="inputEmail" placeholder="email address" required> -->
											{{Form::text('inputEmail', null, ['class'=>'form-control', 'placeholder'=>'email address']) }}

										</div>
										<div class="form-group col-xs-12 col-sm-4">
											<!-- <input type="text" class="form-control" name="inputPhone" id="inputPhone" placeholder="phone number"> -->
											{{Form::text('inputPhone', null, ['class'=>'form-control', 'placeholder'=>'phone number']) }}

										</div>
									</div>

									<div class="row">
										<div class="form-group col-xs-12">
											<!-- <textarea class="form-control" rows="3" name="inputMessage" id="inputMessage" placeholder="your message" required></textarea> -->
											{{ Form::textarea('inputMessage', null, ['class'=>'form-control', 'placeholder'=>'your message (up to 20 characters)']) }}

										</div>
									</div>

									<div class="row">
										<div class="dt-form-info col-sm-6">
											<p>we will respond your message within 24 hours of working day</p>
										</div>
										<div class="form-group col-xs-12 col-sm-6">
											<!-- <button type="submit" class="btn-send">Send Message</button>	 -->
											{{ Form::submit('Send Message', ['class'=>'btn-send']) }}
											<div class="success"><div class="icon-ok-5">Email sent !</div></div>
											<div class="fail"><div class="icon-attention">Failed to send Email !</div></div>
										</div>
									</div>
									{{ Form::close() }}
									<!-- </form> -->
								</div>
							</div>

							<!-- <div class="row ">
								<div class="section-head col-xs-12">
									<header class="centered">
										<section>
											<h2>Details explanation</h2>
										</section>
										<hr>
										<p class="descriptionText"></p>
									</header>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>	
							</div> -->
						</section>

						<!-- <section class="profile_team">
							<div class="row">
								<div class="section-head">
									<header class="col col-sm-12 centered">
										<section>
											<p></p>
											<h2>Meet Our Team</h2>
										</section>
										<hr>
										<p class="descriptionText"></p>
									</header>
								</div>	
							</div>

							<div class="row">

								<div class="profile col-md-6 col-xs-12" data-uk-scrollspy="{cls:'uk-animation-fade'}">
									<figure>
										<div class="top-image">
											<img src="_/images/profile_1.jpg" class="img-responsive" alt="how to create break fast food delicious"/>
										</div>
										<figcaption>
											<h3><span class="profile-heading">SLAMET WIDOSO</span></h3>
											<span class="profile-subheading">Art Director</span>
											<p>Lorem ipsum dolor sit amet, consectetur.</p>
											<ul class="profile-scocial">
												<li><a href="contact.html#" class="icon-facebook"></a></li>
												<li><a href="contact.html#" class="icon-twitter"></a></li>
												<li><a href="contact.html#" class="icon-gplus"></a></li>
												<li><a href="contact.html#" class="icon-mail-alt"></a></li>
											</ul>
											<div class="figcap"></div>
										</figcaption>
									</figure>
								</div>	

								<div class="profile col-md-6 col-xs-12" data-uk-scrollspy="{cls:'uk-animation-fade', delay:600}">
									<figure>
										<div class="top-image">
											<img src="_/images/profile_2.jpg" class="img-responsive" alt="how to create break fast food delicious"/>
										</div>
										<figcaption>
											<h3><span class="profile-heading">MARKABL</span></h3>
											<span class="profile-subheading">Art Director</span>
											<p>Lorem ipsum dolor sit amet, consectetur.</p>
											<ul class="profile-scocial">
												<li><a href="contact.html#" class="icon-facebook"></a></li>
												<li><a href="contact.html#" class="icon-twitter"></a></li>
												<li><a href="contact.html#" class="icon-gplus"></a></li>
												<li><a href="contact.html#" class="icon-mail-alt"></a></li>
											</ul>
											<div class="figcap"></div>
										</figcaption>
									</figure>
								</div>	

								<div class="profile col-md-6 col-xs-12" data-uk-scrollspy="{cls:'uk-animation-fade', delay:1200}">
									<figure>
										<div class="top-image">
											<img src="_/images/profile_3.jpg" class="img-responsive" alt="how to create break fast food delicious"/>
										</div>
										<figcaption>
											<h3><span class="profile-heading">Koralia Vassilis</span></h3>
											<span class="profile-subheading">Art Director</span>
											<p>Lorem ipsum dolor sit amet, consectetur.</p>
											<ul class="profile-scocial">
												<li><a href="contact.html#" class="icon-facebook"></a></li>
												<li><a href="contact.html#" class="icon-twitter"></a></li>
												<li><a href="contact.html#" class="icon-gplus"></a></li>
												<li><a href="contact.html#" class="icon-mail-alt"></a></li>
											</ul>
											<div class="figcap"></div>
										</figcaption>
									</figure>
								</div>	
								<div class="profile col-md-6 col-xs-12" data-uk-scrollspy="{cls:'uk-animation-fade', delay:300}">
									<figure>
										<div class="top-image">
											<img src="_/images/profile_4.jpg" class="img-responsive" alt="how to create break fast food delicious"/>
										</div>
										<figcaption>
											<h3><span class="profile-heading">Gallus</span></h3>
											<span class="profile-subheading">Art Director</span>
											<p>Lorem ipsum dolor sit amet, consectetur.</p>
											<ul class="profile-scocial">
												<li><a href="contact.html#" class="icon-facebook"></a></li>
												<li><a href="contact.html#" class="icon-twitter"></a></li>
												<li><a href="contact.html#" class="icon-gplus"></a></li>
												<li><a href="contact.html#" class="icon-mail-alt"></a></li>
											</ul>
											<div class="figcap"></div>
										</figcaption>
									</figure>
								</div>	
							</div>
						</section> -->
					</div>
					<div class="col-sm-4 sidebar">
						<div class="widget">
							<h3>Contact Info</h3>

							<address>
								<strong>Vitton Global Limited</strong><br>
								9 Oremeji Avenue, Shasha Bameke,<br>
								Egbeda, Lagos State, Nigeria.<br>
								+2348035868250 | +2348096668250<br>
								<a href="">vittongloballtd@gmail.com</a><br>
								<a href="http://www.vittonglobal.com">www.vittonglobal.com</a>
							</address>

						</div>
						<hr>						
					</div>
				</div>			
			</div>
		</div>
		<!-- Google Map Section -->
		<section class="map-image-area" data-type="background" data-speed="3">
			<div class="map">
				<div class="circle-address uk-scrollspy-init-inview uk-scrollspy-inview uk-animation-fade" data-uk-scrollspy="{cls:'uk-animation-fade', delay:300}">
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
									<a href=""> vittongloballtd@gmail.com</a>
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

		<!-- login & register form -->
		<div id="login-modal" class="popup-gallery md-modal md-effect-1">
			<div class="md-content form">
				<h1>Sign In</h1>
				<div class="row form-body">
					<div class="col-xs-12">
						<form role="form" id="login-form" action="contact.html#">
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
										you don't have account?  <a href="contact.html#" class="md-trigger" data-modal="register-modal" onClick="$('#login-modal').removeClass('md-show');return false;">Register</a>
									</label>
								</div>
								<div class="form-group col-xs-12 col-sm-4">
									<button type="submit" class="btn-submit">Sign In</button>	
								</div>
							</div>

						</form>
					</div>
				</div>

				<a href="contact.html#" class="md-close right"><i class="icon-cancel"></i></a>
			</div>
		</div>
		<div id="register-modal" class="popup-gallery md-modal md-effect-1">
			<div class="md-content form">
				<h1>REGISTER</h1>
				<div class="row form-body">
					<div class="col-xs-12">
						<form role="form" id="register-form" action="contact.html#">
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
											<input type="checkbox">I Accept the <a href="contact.html#">Term & Condition</a>
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

				<a href="contact.html#" class="md-close right"><i class="icon-cancel"></i></a>
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
<!DOCTYPE html>
<html>
<head>
	
	<title>Vitton Global Limited</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	{{ HTML::style('css/bootstrap.css') }}
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
									<a href="index.html"  class="dropdown-toggle" data-toggle="dropdown">Home</a>
									<ul class="dropdown-menu">
										<li><h5 class="menuTitle">{{HTML::link('/', 'Home') }}</h5></li>
									</ul>							
								</li>

								<li class="dropdown">
									<a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Make an Order</a>
									<ul class="dropdown-menu">
										<li><h5 class="menuTitle">{{HTML::link('/order', 'Order') }}</h5></li>

									</ul>
								</li>
								<li class="dropdown">
									<a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a>
									<ul class="dropdown-menu">
										<li><h5 class="menuTitle">{{HTML::link('/portfolio', 'Portfolio') }}</h5></li>
									</ul>

								</li>
								<li class="dropdown">
									<a href="contact.html">Contact Us</a>
									<ul class="dropdown-menu">
										<li><h5 class="menuTitle">{{HTML::link('/contact', 'Contact') }}</h5></li>

									</ul>
								</li>

							</ul>
						</div>
						<div class="right-cell">
							<form class="navbar-form navbar-right">
								<ul>
									<li>
										<div class="popup_form hide-me-first">
											<input type="text" class="form-control" placeholder="Search">
										</div>

									</li>
								</ul>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

	{{ Form::open(array('url'=>'/fileupload','files'=>true)) }}


	{{ Form::label('file','File',array('id'=>'','class'=>'')) }}
	{{ Form::file('image','',array('id'=>'','class'=>'')) }}
	{{ Form::text('title','Add product name')}}
	<br/>
	{{ Form::textarea('description', 'Add image description');}}
	<br/>
	<!-- submit buttons -->
	{{ Form::submit('Save') }}

	<!-- reset buttons -->
	{{ Form::reset('Reset') }}

	{{ Form::close() }}
</body>
</html>
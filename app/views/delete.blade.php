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

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>

</head>

<body>
	<section class="header section-padding">
		<div class="background">&nbsp;</div>
		<div class="container">
			<div class="header-text">
				<h1>Delete</h1>
				<p>
					Delete Product page
				</p>
			</div>
			{{HTML::link('/vtadmin', 'Back to Admin home', array("class"=>'btn btn-primary')) }}
		</div>
	</section>
	<div class="container">
		<section class="section-padding">
			<div class="">
				<h1>Do you want to delete product: {{ $photo->title }} ? </h1>
				{{ Form::open(['url'=> '/delete', 'class'=>'form']) }}
				{{ Form::hidden('id', $photo->id)}}
				<div class="form-group">
					{{ Form::submit('Delete Photo', ['class' => 'btn btn-danger']) }}
					<a href="{{ action('HomeController@home') }}"
					class="btn btn-warning"> No </a>
				</div>
				{{ Form::close() }}
			</div>
		</section>
	</div>
	<section class="container footer-section">
		<div class="col-lg-5 col-xs-12"><p style="color:black">&copy; 2015 Vitton Global Limited. All right reserved</p></div>
	</section>

</body>

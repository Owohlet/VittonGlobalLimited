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
				<h1>Add a new product</h1>
				<!-- <p>
					Create tasks page
				</p> -->
				{{HTML::link('/vtadmin', 'Back to Admin home', array("class"=>'btn btn-primary')) }}

			</div>
		</div>
	</section>

	<div class="container">
		<section class="section-padding">
			<div class="">
				<!-- <h1>Create A Photo</h1> -->
				{{ Form::open(['url'=> '/create','files'=>true, 'method' => 'post', 'class'=>'form']) }}
				<div>
					<!-- {{ Form::label('file','File',array('id'=>'','class'=>'')) }} -->
					{{ Form::file('image','',array('id'=>'','class'=>'form-control', 'placeholder'=>'upload picture')) }}
				</div>
				<br>
				<div>
					<!-- {{ Form::label('title', 'Title:') }} -->
					{{ Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Name of product']) }}

				</div>
				<br>
				<div>
					{{ Form::label('category', 'Category:') }}
					{{ Form::select('category', array('metal' => 'metal fabrication', 'stainless' => 'stainless steel', 'led' => 'LED', 'phone' => 'phone accesories', 'computer' => 'computer accesories', 'others' => 'others'), ['class'=>'form-control']) }}

				</div>
				<br>
				<div>

					<!-- {{ Form::label('description', 'Description:') }} -->
					{{ Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Product description and specifications']) }}
				</div>
				<br>
				<div>
					{{ Form::submit('Create Product', ['class'=>'btn btn-primary']) }}
				</div>
				{{ Form::close() }}
			</div>
		</section>
	</div>
	<section class="container footer-section">
		<div class="col-lg-5 col-xs-12"><p style="color:black">&copy; 2015 Vitton Global Limited. All right reserved</p></div>
	</section>
</body>
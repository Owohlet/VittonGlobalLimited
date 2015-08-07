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
	<!-- <section class="header section-padding">
		<div class="background">&nbsp;</div>
		<div class="container">
			<div class="header-text">
				<h1>Vitton Admin Backend</h1>
				<p>
					This page is strictly
					for admin! <br>If this is not admin click {{HTML::link('/', 'here') }} to return to site
				</p>
			</div>
		</div>
	</section> -->

	<section class="subpage-banner contact-banner">
		<div class="container">
			<div class="row header-group">
				<div class="col-sm-8 col-sm-12">
					<h1>Vitton Admin Backend</h1>
				</div>		
			</div>
		</div>	
	</section>

	<div class="container">
		<p>
			This page is strictly
			for admin! <br>If you got here by mistake click <strong>{{HTML::link('/', 'here') }} </strong> to return to site
		</p>
		<br>
		{{HTML::link('/create', 'Add new product', array("class"=>'btn btn-primary')) }}
		<br>
		<br>
		<section class="section-padding">
			<div class="">
				<div class="panel panel-default table-responsive">
					<div class="panel-heading">
						<h1>
							<span class="grey"> Product list</span>
						</h1>
					</div>
					@if ($photos->isEmpty())
					<p> Currently, there are no products added!</p>
					@else
					<table class="table">
						<thead>
							<tr>
								<th></th>
								<th>Title</th>
								<th>Description</th>
								<th>Image</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($photos as $photo)
							<tr>
								<td> </td>
								<td>{{$photo->title }}</td>
								<td style="width:500px">{{$photo->description}}</td>
								<td><img src="{{ $photo->path}}" style="width:200px; height:auto"></td>
								<td>
									<a href="{{ action('HomeController@edit', $photo->id) }}"
										class="btn btn-info">Edit
									</a>
									<a href="{{ action('HomeController@delete', $photo->id) }}"
										class="btn btn-danger">Delete
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					@endif
				</div>
			</div>
		</div>
	</section>
	<section class="container footer-section">
		<div class="col-lg-5 col-xs-12"><p style="color:black">&copy; 2015 Vitton Global Limited. All right reserved</p></div>
	</section>
</body>
</html>
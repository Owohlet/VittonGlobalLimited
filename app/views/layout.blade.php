<html>
<head>
	{{ HTML::style('css/home.css') }}
	{{ HTML::script('js/home.js') }}
</head>
<body>
	<h1 class="arrive">Laravel Quickstart</h1>

	@yield('content')

	<script type="text/javascript">
		console.log("will this output?")
	</script>
	<h2> YEss</h2>
	
</body>
</html>
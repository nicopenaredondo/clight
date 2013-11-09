<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		@section('title')
		@show
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="{{ asset('assets/stylesheet/bootstrap.css') }}">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('assets/stylesheet/login.css') }}">
</head>
<body>
	<!--START_HEADER-->
	<!--END_HEADER-->

	<!--START_BODY-->
	<div class="container">
		@yield('container')
	</div>
	<!--END_BODY-->
	
	<!--START_FOOTER-->
	
	<!--END_FOOTER-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="{{ asset('assets/javascript/jquery.backstretch.min.js') }}" type="text/javascript"></script>
	<script>
	$(document).ready(function(){
		$("body").backstretch('../../assets/img/bg-login.jpg')
	});
	</script>
</body>
</html>
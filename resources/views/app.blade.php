<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/all.css') }}" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	
	@include('flash::message')

	@include('include.menu')

	@yield('content')
	

	
	

	<!-- Scripts -->
	<script src="{{ asset('/js/all.js') }}"></script>

	@include('script.flash')
	
	@yield('footer')




</body>
</html>

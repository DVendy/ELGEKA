<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
	<link href="{{ URL::asset('css/londinium-theme.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('css/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('css/icons.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('css/site.css')}}" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css"> 

	@yield('extraStyle')
</head>
<body class="sidebar-wide">
	@include('front.header')

	@yield('body')

	@include('front.footer')

	@section('footerScript')

	@show

	@section('footerExtraScript')

	@show
	
</body>
</html>
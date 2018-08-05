<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

	<!-- Title -->
	<title>@yield('title')</title>
	<link rel="icon" href="{{ asset('images/logo-site.png') }}"/>
</head>
<body>

	@section('navbar')
	@include('layouts.navbar')
	@show

	@section('modal')
	@include('layouts.modal')
	@show

	<div class="container" id="content">
		@yield('content')
	</div>

	@section('footer')
	@include('layouts.footer')
	@show

</body>
</html>
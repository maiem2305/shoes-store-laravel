<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Logo -->
    <link rel="icon" href="{{ asset('storage/logo/logo-site.png') }}" />
</head>

<body>
    @include('layouts.navbar')

    @section('modal')
    @include('frontend.common.auth-modal')
    @show

    <div class="container">
    @include('layouts.notification')
    </div>

    @yield('cover')

    <div class="container">
    @yield('content')
    </div>

    @include('layouts.footer')

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/user.js') }}"></script>

    @yield('script')
</body>

</html>

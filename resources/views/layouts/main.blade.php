<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="../../../../favicon.ico">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/product.css')}}" rel="stylesheet">
</head>

<body>

<!-- include menu -->
@include('layouts.menu')

<main role="main">
    @yield('content')
</main>

<footer class="text-muted text-center footer-bottom" style="background-color: rgba(0, 0, 0, .85);">
    <div class="container">
        <p class="d-block mb-3 text-muted">&copy; 2018. XXX有限公司 All rights reserved.</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<script src="{{asset("js/app.js")}}"></script>

<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>
</body>
</html>
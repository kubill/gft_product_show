<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('title') - {{ config('product_name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.bootcss.com/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/theme.css') }}">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/product.css') }}">
    @yield('css')
</head>

<body>

@include('layouts.menu')

<div class="container content-container">
    @yield('content')
</div>

<footer class="footer navbar-fixed-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3 text-center"><p><i class="fa fa-home"></i> 3rd Floor, Building 6, Wantou Industrial
                    Zone, Hongxing Village, Songgang, Bao'an District, Shenzhen</p></div>
            <div class="col-md-6 text-center">
                <div class="row">
                    <div class="col-md-12 text-left">
                        <p><i class="fa fa-phone"> +86-13510717855</i></p>
                    </div>
                    <div class="col-md-12 text-left">
                        <p><i class="fa fa-whatsapp"> +86-13510717855</i></p>
                    </div>
                    <div class="col-md-12 text-left">
                        <p><i class="fa fa-envelope-o"> sales@greenfiretech.com</i></p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <p>© {{date('Y')}} <a href="/">{{ config('product_name') }}</a> All rights reserved. | <a href="http://www.miibeian.gov.cn/" target="_blank">粤ICP备19002091号-1</a></p>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdn.bootcss.com/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>

@yield('js')

</body>
</html>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Foodee &mdash; 100% Free Fully Responsive HTML5 Template </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="css/app.css">
    <!-- Animate.css -->
{{--<link rel="stylesheet" href="css/animate.css">--}}
<!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Flexslider -->
{{--<link rel="stylesheet" href="css/flexslider.css">--}}
<!-- Bootstrap  -->
    {{--<link rel="stylesheet" href="css/bootstrap.css">--}}

    <link rel="stylesheet" href="css/style.css">


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="fh5co-container">

    @yield('content')

</div>

<div id="fh5co-footer">
    <div class="container">
        <div class="row row-padded">
            <div class="col-md-12 text-center">
                <p class="to-animate">&copy; 2018 XXX科技有限公司
                </p>
                <p class="text-center to-animate"><a href="#" class="js-gotop">Go To Top</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="fh5co-social">
                    <li class="to-animate-2"><a href="#"><i class="icon-weibo"></i></a></li>
                    <li class="to-animate-2"><a href="#"><i class="icon-weixin"></i></a></li>
                    <li class="to-animate-2"><a href="#"><i class="icon-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Main JS -->
<script src="js/app.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>
</body>
</html>
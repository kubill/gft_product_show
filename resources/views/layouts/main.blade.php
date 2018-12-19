<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('title') - {{ config('product_name') }}</title>
    <link href="https://cdn.bootcss.com/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://simpleqode.bitbucket.io/touche/assets/css/theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/product.css">
    @yield('css')
</head>

<body>

<nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background: rgb(1,1,1,0.5);">
    <div class="container">

        <!-- Navbar: Brand -->
        <a class="navbar-brand d-lg-none" href="#">{{ config('product_name') }}</a>

        <!-- Navbar: Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar: Collapse -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Navbar: Brand -->
            <a class="navbar-brand d-none d-lg-flex" href="index.html">
                {{ config('product_name') }}
            </a>

            <!-- Navbar navigation: Right -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">主页</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">产品</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">新闻</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">关于</a>
                </li>
            </ul>

        </div> <!-- / .navbar-collapse -->

    </div> <!-- / .container -->
</nav>

<div class="container content-container">
    @yield('content')
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="to-animate fadeIn animated">© {{date('Y')}} {{ config('company_name') }}</p>
            </div>

        </div>
    </div>
</footer>


<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdn.bootcss.com/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>

@yield('js')

</body>
</html>
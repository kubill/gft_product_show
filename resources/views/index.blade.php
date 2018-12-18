<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>123</title>
    <link href="https://cdn.bootcss.com/Swiper/4.4.5/css/swiper.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://simpleqode.bitbucket.io/touche/assets/css/theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/product.css">

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

            <!-- Navbar navigation: Left -->
            {{--<ul class="navbar-nav mr-auto">--}}

                {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle" href="http://example.com" id="nav-item__menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--Menu--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu" aria-labelledby="nav-item__menu">--}}
                        {{--<a class="dropdown-item" href="menu.html">Menu: Standard</a>--}}
                        {{--<a class="dropdown-item" href="menu_no-images.html">Menu: No Images</a>--}}
                    {{--</div>--}}
                {{--</li>--}}

            {{--</ul>--}}

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

<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        @foreach ($banners as $banner)
            <div class="swiper-slide">
                <a target="_blank" class="swiper-item" style=" background-image:url({{ asset('uploads/'.$banner->path) }})"></a>
            </div>
        @endforeach
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>

<div class="content"></div>
<div class="footer">
    <div id="fh5co-featured" data-section="features" style="display: none;">
        <div class="container">
            <div class="row text-center fh5co-heading row-padded">
                <div class="col-md-12">
                    <h2 class="heading to-animate">热卖产品</h2>
                    {{--<p class="sub-heading to-animate">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
                </div>
            </div>
            <div class="row">
                <div class="fh5co-grid">
                    @foreach ($products as $product)
                        <div class="fh5co-v-half to-animate-2">
                            <div class="fh5co-v-col-2 fh5co-bg-img"
                                 style="background-image: url({{ asset('uploads/'.$product->image) }})"></div>
                            <div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
                                <h2>{{ $product->name }}</h2>
                                <span class="pricing">￥{{ $product->price }}</span>
                                <p>{{ $product->describe }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    <div id="fh5co-footer" class="animated" style="display: none;">
        <div class="container">
            <div class="row">
                {{--<div class="col-md-6 text-center">--}}
                    {{--<p class="to-animate fadeIn animated">Address:{{ config('address') }}</p>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 text-center">--}}
                    {{--<p class="to-animate fadeIn animated">Address:{{ config('address') }}</p>--}}
                {{--</div>--}}
                <div class="col-md-12 text-center">
                    <p class="to-animate fadeIn animated">© {{date('Y')}} {{ config('company_name') }}</p>
                </div>

            </div>
        </div>
    </div>

</div>


<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdn.bootcss.com/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.bootcss.com/Swiper/4.4.5/js/swiper.min.js"></script>
<script src="https://cdn.bootcss.com/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="js/main.js"></script>


<script>
    $(document).ready(function () {
        $("div.content").css('margin-top', window.innerHeight);
        $("div.footer").css('min-height', window.innerHeight + 'px');

        $(window).resize(function () {
            $("div.content").css('margin-top', window.innerHeight)
            $("div.footer").css('min-height', window.innerHeight + 'px');
        });

        $(window).scroll(function () {
            if ($(window).scrollTop() == 0) {
                swiper.mousewheel.enable(); //启用鼠标滑轮控制
            } else {
                swiper.mousewheel.disable(); //禁止鼠标滑轮控制
            }
        });

        $('#fh5co-featured').show();
        $('#fh5co-footer').show();
    });
    var swiper = new Swiper('.swiper-container', {
        direction: 'vertical',
        speed: 500,
        slidesPerView: 1,
        spaceBetween: 30,
        mousewheel: {
            releaseOnEdges: true
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        }
    });
</script>

</body>
</html>

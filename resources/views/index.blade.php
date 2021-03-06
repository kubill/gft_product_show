<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Green Fire Tech | Best Vaporizers Official Site</title>
    <link href="https://cdn.bootcss.com/Swiper/4.4.5/css/swiper.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/theme.css') }}">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/product.css">
    <meta name="keywords" content="origin Vaporizer, Vaping products, dry herb vaporizer, E-Cigarettes, Vaporizers, best vape, vape">
    <meta name="description" content=" Green Fire Tech offers good performance vaporizers devices, equipment., customize your vaping life with Green Fire Tech.">
</head>

<body>

@include('layouts.menu')

<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        @foreach ($banners as $banner)
            <div class="swiper-slide">
                <a target="_blank" class="swiper-item"
                   style=" background-image:url({{ asset('uploads/'.$banner->path) }})"></a>
            </div>
        @endforeach
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>

<div class="container-index" style="">
    <div class="container text-center" style="padding-bottom: 4rem;">
        <div class="row" style="font-size: 2rem;color: wheat;">
                        Origin vaporizer engineered by Green Fire Tech is a supper cost-effective portable dry herb vaporizer with the battery 2200 mAh, the experience it brings will far exceed what you pay. With “ORIGIN“ , you would pursue the original flavor and enjoy the pleasure of nature.
			            </div>
    </div>
    <footer class="footer">
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
            $("div.content").css('margin-top', window.innerHeight);
            $("div.footer").css('min-height', window.innerHeight + 'px');
        });

        $(window).scroll(function () {
            console.log($(window).scrollTop());
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
        mousewheel: {
            releaseOnEdges: true
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        on: {
            reachEnd: function () {
                setTimeout(function () {
                    enableMouseWheel();
                }, 300);
            },
            slidePrevTransitionEnd: function(){
                if(this.activeIndex < {{ $bannerAmount-1 }}){
                    disabledMouseWheel();
                }
            },
        },
    });

    function disabledMouseWheel() {
        if (document.addEventListener) {
            document.addEventListener('DOMMouseScroll', scrollFunc, false);
        }//W3C
        window.onmousewheel = document.onmousewheel = scrollFunc;//IE/Opera/Chrome
    }

    function enableMouseWheel() {
        if (document.addEventListener) {
            document.addEventListener('DOMMouseScroll', scrollFunc1, true);

        }
        window.onmousewheel = document.onmousewheel = scrollFunc1;//IE/Opera/Chrome
    }

    function scrollFunc(evt) {
        return false;
    }

    function scrollFunc1(evt) {
        return true;
    }

    window.onload = disabledMouseWheel;

</script>

</body>
</html>

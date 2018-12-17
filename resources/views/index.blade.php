<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>123</title>
    <link href="https://cdn.bootcss.com/Swiper/4.4.5/css/swiper.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/product.css">
</head>

<body>

<div class="header">
    <div class="logo">logo</div>
    <div class="menu">menu</div>
</div>

<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a target="_blank" class="swiper-item" style=" background-image:url(images/1.jpg)"></a>
        </div>
        <div class="swiper-slide">
            <a target="_blank" class="swiper-item" style=" background-image:url(images/2.jpg)"></a>
        </div>
        <div class="swiper-slide">
            <a target="_blank" class="swiper-item" style=" background-image:url(images/3.jpg)"></a>
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>

<div class="content"></div>
<div class="footer"></div>


<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdn.bootcss.com/Swiper/4.4.5/js/swiper.min.js"></script>


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

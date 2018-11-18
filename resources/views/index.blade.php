<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Product example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/product.css')}}" rel="stylesheet">
</head>

<body>

<nav class="site-header sticky-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between" style="max-width: 1140px">
        <a class="py-2" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="d-block mx-auto">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
                <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
                <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
                <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
                <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
                <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
            </svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="#">主页</a>
        <a class="py-2 d-none d-md-inline-block" href="#">产品</a>
        <a class="py-2 d-none d-md-inline-block" href="#">新闻</a>
        <a class="py-2 d-none d-md-inline-block" href="#">关于</a>
        <a class="py-2 d-none d-md-inline-block" href="#">联系</a>
    </div>
</nav>

<main role="main">
    <!--轮播图-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" data-src="holder.js/1920x512/auto?bg=55595c&text=轮播图 1920x512"
                     alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>产品1</h1>
                        <p>产品介绍</p>
                        <p><a class="btn btn-lg btn-success" href="#" role="button">查看详情</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" data-src="holder.js/1920x512/auto?bg=55595c&text=轮播图 1920x512"
                     alt="Second slide">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>产品2</h1>
                        <p>产品介绍</p>
                        <p><a class="btn btn-lg btn-success" href="#" role="button">查看详情</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" data-src="holder.js/1920x512/auto?bg=55595c&text=轮播图 1920x512"
                     alt="Third slide">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>产品3</h1>
                        <p>产品介绍</p>
                        <p><a class="btn btn-lg btn-success" href="#" role="button">查看详情</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!--产品展示-->
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="ps-section__title" data-mask="features">- 特 色 产 品</h3>
                    <div class="ps-section__action float-right"><a class="ps-morelink text-uppercase" href="#">查 看 全 部<i
                                    class="fa fa-long-arrow-right"></i></a></div>
                </div><!-- /.col-lg-12 -->
                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <div class="ps-badge"><span>New</span></div>
                        <a href="#"><img class="card-img-top"
                                         data-src="holder.js/100px300?theme=thumb&bg=55595c&fg=eceeef&text=产品图片 328x300"
                                         alt="Card image cap"></a>
                        <div class="card-body">
                            <p class="card-text">产品的介绍</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <div class="ps-badge ps-badge--hot"><span>Hot</span></div>
                        <a href="#"><img class="card-img-top"
                             data-src="holder.js/100px300?theme=thumb&bg=55595c&fg=eceeef&text=产品图片 328x300"
                                         alt="Card image cap"></a>
                        <div class="card-body">
                            <p class="card-text">产品的介绍</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <a href="#"><img class="card-img-top"
                             data-src="holder.js/100px300?theme=thumb&bg=55595c&fg=eceeef&text=产品图片 328x300"
                                         alt="Card image cap"></a>
                        <div class="card-body">
                            <p class="card-text">产品的介绍</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <a href="#"><img class="card-img-top"
                             data-src="holder.js/100px300?theme=thumb&bg=55595c&fg=eceeef&text=产品图片 328x300"
                                         alt="Card image cap"></a>
                        <div class="card-body">
                            <p class="card-text">产品的介绍</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <div class="ps-badge"><span>New</span></div>
                        <a href="#"><img class="card-img-top"
                             data-src="holder.js/100px300?theme=thumb&bg=55595c&fg=eceeef&text=产品图片 328x300"
                                         alt="Card image cap"></a>
                        <div class="card-body">
                            <p class="card-text">产品的介绍</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <div class="ps-badge ps-badge--hot"><span>Hot</span></div>
                        <a href="#"><img class="card-img-top"
                             data-src="holder.js/100px300?theme=thumb&bg=55595c&fg=eceeef&text=产品图片 328x300"
                                         alt="Card image cap"></a>
                        <div class="card-body">
                            <p class="card-text">产品的介绍</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <a href="#"><img class="card-img-top"
                             data-src="holder.js/100px300?theme=thumb&bg=55595c&fg=eceeef&text=产品图片 328x300"
                                         alt="Card image cap"></a>
                        <div class="card-body">
                            <p class="card-text">产品的介绍</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-3 shadow-sm">
                        <a href="#"><img class="card-img-top"
                             data-src="holder.js/100px300?theme=thumb&bg=55595c&fg=eceeef&text=产品图片 328x300"
                                         alt="Card image cap"></a>
                        <div class="card-body">
                            <p class="card-text">产品的介绍</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row mb-2">
            <div class="col-lg-12">
                <h3 class="ps-section__title" data-mask="news">- 我们的故事</h3>
                <div class="ps-section__action float-right"><a class="ps-morelink text-uppercase" href="#">浏 览 更 多<i
                                class="fa fa-long-arrow-right"></i></a></div>
            </div><!-- /.col-lg-12 -->

            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">标签</strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="#">精选文章</a>
                        </h3>
                        <div class="mb-1 text-muted">11月12日</div>
                        <p class="card-text mb-auto">文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容</p>
                        <button type="button" class="btn btn-sm btn-outline-success">继续阅读</button>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block"
                         data-src="holder.js/300x250?theme=thumb&text=文章图片 300x250" alt="Card image cap">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-success">设计</strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="#">文章标题</a>
                        </h3>
                        <div class="mb-1 text-muted">11月11日</div>
                        <p class="card-text mb-auto">文章内容</p>
                        <button type="button" class="btn btn-sm btn-outline-success">继续阅读</button>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block"
                         data-src="holder.js/300x250?theme=thumb&text=文章图片 300x250" alt="Card image cap">
                </div>
            </div>
        </div>

    </div>

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
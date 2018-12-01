@extends('layouts.main')

@section('content')
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
                    <div class="ps-section__action float-right"><a class="ps-morelink text-uppercase" href="{{route('productList')}}">查 看 全 部<i
                                    class="fa fa-long-arrow-right"></i></a></div>
                </div><!-- /.col-lg-12 -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card text-center">
                        <div class="ps-badge"><span>New</span></div>
                        <a href="#"><img class="card-img" src="{{asset('images/4.png')}}" alt="Card image cap"></a>
                        <div class="card-body">
                            <p class="card-text">产品的介绍</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-md-6">
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
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card mb-3 shadow-sm">
                        <a href="#"><img class="card-img-top"
                                         data-src="holder.js/100px300?theme=thumb&bg=55595c&fg=eceeef&text=产品图片 328x300"
                                         alt="Card image cap"></a>
                        <div class="card-body">
                            <p class="card-text">产品的介绍</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card mb-3 shadow-sm">
                        <a href="#"><img class="card-img-top"
                                         data-src="holder.js/100px300?theme=thumb&bg=55595c&fg=eceeef&text=产品图片 328x300"
                                         alt="Card image cap"></a>
                        <div class="card-body">
                            <p class="card-text">产品的介绍</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
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
                <div class="col-xl-3 col-lg-4 col-md-6">
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
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="card mb-3 shadow-sm">
                        <a href="#"><img class="card-img-top"
                                         data-src="holder.js/100px300?theme=thumb&bg=55595c&fg=eceeef&text=产品图片 328x300"
                                         alt="Card image cap"></a>
                        <div class="card-body">
                            <p class="card-text">产品的介绍</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
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

    <!--文章-->
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

@endsection
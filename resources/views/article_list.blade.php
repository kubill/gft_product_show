@extends('layouts.main')

@section('content')
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
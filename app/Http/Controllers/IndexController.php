<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {

    }

    /**
     * 主页
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $banners = Banner::where('display', 1)->orderBy('sort','ASC')->get();//轮播图
        $products = Product::where('hot',1)->take(2)->get();//Product::get();//8个产品
        $article = 1;//Article::get();//2个文章
        return view('index', compact('banners', 'products'));
    }

    /**
     * 产品列表
     *
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function productList(Product $product)
    {
        return view('product_list');
    }

    /**
     * 产品详情
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function productDetail($id)
    {
        return view();
    }

    /**
     * 文章列表
     *
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function articleList(Article $article)
    {
        return view('article_list');
    }

    /**
     * 文章详情
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function articleDetail($id)
    {
        return view();
    }

    /**
     * 关于页面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return view('about');
    }

    /**
     * 联系我们
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }
}

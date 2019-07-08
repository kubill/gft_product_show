<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Comment;
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
        $banners = Banner::where('display', 1)->orderBy('sort', 'ASC')->get();//轮播图
        $bannerAmount = count($banners);
        $products = Product::where('hot', 1)->take(2)->get();//Product::get();//8个产品
        return view('index', compact('banners', 'products', 'bannerAmount'));
    }

    /**
     * 产品列表
     *
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function productList(Product $product)
    {
        $products = Product::get();
        return view('product_list', compact('products'));
    }

    /**
     * 产品详情
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function productDetail($id)
    {
        $product = Product::find($id);
        return view('product', compact('product'));
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
        $product = Product::query()->find(1);
        $result = false;
        return view('contact', compact('product', 'result'));
    }

    public function contackPost(Request $request)
    {
        $data = $request->all();
        Comment::query()->create($data);
        $result = true;
        return view('contact', compact('result'));
    }
}

@extends('layouts.main')

@section('content')

    <div id="fh5co-home" class="js-fullheight" data-section="home">

        <div class="flexslider">

            <div class="fh5co-overlay"></div>
            <div class="fh5co-text">
                <div class="container">
                    <div class="row">
                        <h1 class="to-animate">Foodee</h1>
                        <h2 class="to-animate">Lovely Designed <span>by</span> <a href="#"
                                                                                  target="_blank">freehtml5.co</a>
                        </h2>
                    </div>
                </div>
            </div>
            <ul class="slides">
                <li style="background-image: url(images/slide_1.jpg);" data-stellar-background-ratio="0.5"></li>
                <li style="background-image: url(images/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
                <li style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5"></li>
            </ul>

        </div>

    </div>

    <div class="js-sticky">
        <div class="fh5co-main-nav">
            <div class="container-fluid">
                <div class="fh5co-menu-1">
                    <a href="#" data-nav-section="home">主页</a>
                    <a href="#" data-nav-section="about">产品</a>
                </div>
                <div class="fh5co-logo">
                    <a href="index.html">foodee</a>
                </div>
                <div class="fh5co-menu-2">
                    <a href="#" data-nav-section="features">新闻</a>
                    <a href="#" data-nav-section="events">联系</a>
                </div>
            </div>

        </div>
    </div>

    <div id="fh5co-featured" data-section="features">
        <div class="container">
            <div class="row text-center fh5co-heading row-padded">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="heading to-animate">热卖产品</h2>
                    {{--<p class="sub-heading to-animate">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
                </div>
            </div>
            <div class="row">
                <div class="fh5co-grid">
                    <div class="fh5co-v-half to-animate-2">
                        <div class="fh5co-v-col-2 fh5co-bg-img"
                             style="background-image: url(images/res_img_1.jpg)"></div>
                        <div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
                            <h2>Fresh Mushrooms</h2>
                            <span class="pricing">$7.50</span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                        </div>
                    </div>
                    <div class="fh5co-v-half to-animate-2">
                        <div class="fh5co-v-col-2 fh5co-bg-img"
                             style="background-image: url(images/res_img_1.jpg)"></div>
                        <div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
                            <h2>Fresh Mushrooms</h2>
                            <span class="pricing">$7.50</span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="fh5co-sayings">
        <div class="container">
            <div class="row to-animate">

                <div class="flexslider">
                    <ul class="slides">

                        <li>
                            <blockquote>
                                <p>"一个人的价值，在于他贡献了什么，而不在于他能得到什么。"</p>
                                <p class="quote-author right">&mdash; 阿尔伯特·爱因斯坦</p>
                            </blockquote>
                        </li>
                        <li>
                            <blockquote>
                                <p>"许多年以后，人类的机器可以在宇宙中任何一点获取能量从而驱动机器。"</p>
                                <p class="quote-author">&mdash; 尼古拉·特斯拉</p>
                            </blockquote>
                        </li>
                        <li>
                            <blockquote>
                                <p>"在我们了解科学之前，相信上帝创造宇宙是很理所当然的。但是现在科学已经提供了更让人信服的解释。"</p>
                                <p class="quote-author">&mdash; 史蒂芬·霍金</p>
                            </blockquote>
                        </li>
                        <li>
                            <blockquote>
                                <p>&ldquo;Never work before breakfast; if you have to work before breakfast, eat your
                                    breakfast first.&rdquo;</p>
                                <p class="quote-author">&mdash; Josh Billings</p>
                            </blockquote>
                        </li>


                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div id="fh5co-about" data-section="about">
        <div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(images/res_img_1.jpg)"></div>
        <div class="fh5co-2col fh5co-text">
            <h2 class="heading to-animate">关于我们</h2>
            <p class="to-animate"><span class="firstcharacter">&nbsp;</span>华为是全球领先的ICT（信息与通信）基础设施和智能终端提供商，致力于把数字世界带入每个人、每个家庭、每个组织，构建万物互联的智能世界。我们在通信网络、IT、智能终端和云服务等领域为客户提供有竞争力、安全可信赖的产品、解决方案与服务，与生态伙伴开放合作，持续为客户创造价值，释放个人潜能，丰富家庭生活，激发组织创新。华为坚持围绕客户需求持续创新，加大基础研究投入，厚积薄发，推动世界进步。
            </p>
            <p class="text-center to-animate"><a href="#" data-nav-section="about" class="btn btn-primary btn-outline">Get
                    in touch</a></p>
        </div>
    </div>

@endsection
@extends('layout.master')
@section('title','Home')
@section('css','shop.css')
@section('layout.content')
    <div id="hero" class="hero overlay subpage-hero shop-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Shop</h1>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./">Home</a></li>
                  <li class="breadcrumb-item active">Shop</li>
                </ol>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section subpage-site-section section-portfolio">
            <div class="container">

                <ul class="portfolio-sorting list-inline text-center">
                    <li><a href="#" class="btn btn-gray active" data-group="all">All</a></li>
                    <li><a href="#" class="btn btn-gray" data-group="food">Foods</a></li>
                    <li><a href="#" class="btn btn-gray" data-group="mobileapp">Drinks</a></li>
                    <li><a href="#" class="btn btn-gray" data-group="illustration">Medical Equipments</a></li>
                    {{-- <li><a href="#" class="btn btn-gray" data-group="branding">Branding</a></li>
                    <li><a href="#" class="btn btn-gray" data-group="photography">Photography</a></li> --}}
                </ul><!-- /.portfolio-sorting  -->

                <div id="grid" class="row">
                    <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["food"]'>
                        <div class="portfolio-item">
                            <img src="https://th.bing.com/th/id/OIP.BZt1nitqklu4KjnzsD2ntgAAAA?pid=ImgDet&rs=1" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Oat Fiber 500 
                                <br>
                               <span> 10 JOD </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["mobileapp"]'>
                        <div class="portfolio-item">
                            <img src="/img/portfolio-2.jpg" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Easy Polo Black Edition
                                <br>
                               <span> $56 </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["illustration"]'>
                        <div class="portfolio-item">
                            <img src="/img/portfolio-3.jpg" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Easy Polo Black Edition
                                <br>
                               <span> $56 </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["food"]'>
                        <div class="portfolio-item">
                            <img src="/img/shop/WholemealGlutenFreeFlourBlend.jpg" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Wholemeal Flour Blend
                                <br>
                               <span> 13 JOD </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["photography"]'>
                        <div class="portfolio-item">
                            <img src="/img/portfolio-5.jpg" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Easy Polo Black Edition
                                <br>
                               <span> $56 </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                            
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["illustration"]'>
                        <div class="portfolio-item">
                            <img src="/img/portfolio-6.jpg" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Easy Polo Black Edition
                                <br>
                               <span> $56 </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["mobileapp"]'>
                        <div class="portfolio-item">
                            <img src="/img/portfolio-7.jpg" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Easy Polo Black Edition
                                <br>
                               <span> $56 </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["uiux"]'>
                        <div class="portfolio-item">
                            <img src="/img/portfolio-8.jpg" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Easy Polo Black Edition
                                <br>
                               <span> $56 </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["mobileapp"]'>
                        <div class="portfolio-item">
                            <img src="/img/portfolio-9.jpg" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Easy Polo Black Edition
                                <br>
                               <span> $56 </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["photography"]'>
                        <div class="portfolio-item">
                            <img src="/img/portfolio-10.jpg" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Easy Polo Black Edition
                                <br>
                               <span> $56 </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["branding"]'>
                        <div class="portfolio-item">
                            <img src="/img/portfolio-11.jpg" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Easy Polo Black Edition
                                <br>
                               <span> $56 </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["webdesign"]'>
                        <div class="portfolio-item">
                            <img src="/img/portfolio-12.jpg" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Easy Polo Black Edition
                                <br>
                               <span> $56 </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div><!-- /.portfolio-item -->
                    </div>
                </div>
                </div>
                <div class="text-center">
                    <a class="btn btn-gray" href="#" id="loadMore">Load More</a>
                </div>

            </div>
        </section><!-- /.section-portfolio -->

    </main><!-- /#main -->
@endsection
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
                    <li><a href="#" class="btn btn-gray" data-group="drink">Drinks</a></li>
                    <li><a href="#" class="btn btn-gray" data-group="medical">Medical Equipments</a></li>
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
                    <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["medical"]'>
                        <div class="portfolio-item">
                            <img src="https://img.crazysales.com.au/products_pictures/101/101445_555265_HD.jpg" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Equipment Knee Walker Scooter
                                <br>
                               <span> 50 JOD </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["drink"]'>
                        <div class="portfolio-item">
                            <img src="https://i5.walmartimages.com/asr/4a144abe-edc5-4e9b-a614-77456f0b8682.3040cc1fdddacfe3a29bb8301ff5c32d.jpeg?odnWidth=612&odnHeight=612&odnBg=ffffff" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Zico Coconut Water
                                <br>
                               <span> 4 JOD </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["drink"]'>
                        <div class="portfolio-item">
                            <img src="/img/shop/lemon.png" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Wholemeal Flour Blend
                                <br>
                               <span> 7 JOD </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["medical"]'>
                        <div class="portfolio-item">
                            <img src="https://www.shower-buddy.com/wp-content/uploads/2020/05/Showerbuddy-SB1-07.jpg" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Mobility aid for step-in showers

                                <br>
                               <span> 70 JOD </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                            
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["food"]'>
                        <div class="portfolio-item">
                            <img src="https://cdn.shopify.com/s/files/1/0280/1542/7668/products/CupcakeMix_510x.progressive.jpg?v=1625719476" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Gluten free cup cake mix 500gm
                                <br>
                               <span> 12 JOD </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["food"]'>
                        <div class="portfolio-item">
                            <img src="https://cdn.shopify.com/s/files/1/0280/1542/7668/products/ChocolateCake_510x.progressive.jpg?v=1625719449" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Gluten free choclate cake mix 500gm
                                <br>
                               <span> 5 JOD </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["drink"]'>
                        <div class="portfolio-item">
                            <img src="https://secondstartplus.com/wp-content/uploads/2020/03/25495-3.jpg" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Cucumber Mint Cocktail  
                                <br>
                               <span> 6 JOD </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["medical"]'>
                        <div class="portfolio-item">
                            <img src="https://cdn.shopify.com/s/files/1/0266/8563/products/THERA-Trainer-tigo_510_is_use_1400x.jpg?v=1576047456" class="img-res" alt="">
                            <h3 class="portfolio-item-title"> Active and Passive exercise equipment
                                <br>
                               <span> 100 JOD </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["drink"]'>
                        <div class="portfolio-item">
                            <img src="https://i5.walmartimages.com/asr/213a36b7-dff0-491c-9856-4189b5d1f4e0.5cfcd7accee6b76fb84f306b9c67b809.jpeg" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Dark Chocolate Royal 
                                <br>
                               <span> 10 JOD </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    {{-- <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["branding"]'>
                        <div class="portfolio-item">
                            <img src="https://cdn.shopify.com/s/files/1/0266/8563/products/THERA-Trainer-tigo_510_is_use_1400x.jpg?v=1576047456" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Easy Polo Black Edition
                                <br>
                               <span> $56 </span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div><!-- /.portfolio-item -->
                    </div> --}}
                    {{-- <div class="col-lg-3 col-md-4 col-xs-6" data-groups='["food"]'>
                        <div class="portfolio-item">
                            <img src="https://cdn.shopify.com/s/files/1/0280/1542/7668/products/ChocolateCake_510x.progressive.jpg?v=1625719449" class="img-res" alt="">
                            <h3 class="portfolio-item-title">Gluten free choclate cake mix 500gm
                                <br>
                               <span> 3 JOD</span>
                            </h3>
                            <a href="./portfolio-item"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </div><!-- /.portfolio-item -->
                    </div> --}}
                </div>
                </div>
                <div class="text-center">
                    <a class="btn btn-gray" href="#" id="loadMore">Load More</a>
                </div>

            </div>
        </section><!-- /.section-portfolio -->

    </main><!-- /#main -->
@endsection
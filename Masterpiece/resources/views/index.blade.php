@extends('layout.master')
@section('title','Home')
@section('layout.content')
    <div id="hero" class="hero overlay">
        <div class="hero-content">
            <div class="hero-text">
                <h2>To make the life much better for our <span class="hero-span">SPECIAL</span> loved people</h2>
                {{-- <p>Your clients on the internet. Learn how to receive them.</p> --}}
                <a href="#" class="btn btn-border">Learn more</a>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section section-features">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>About Us</h2>
                        <p>We have turned our personal experiance juicer into this website to be close to people who are like us, to work together to solve our problems and make life simpler and more beautiful. And always remember that you are the center of the universe becuase you are special.</p>
                    </div>
                    <div class="col-sm-7 hidden-xs">
                        <img src="/img/homePage/about.jpg" alt="">
                    </div>
                </div>
            </div>
        </section><!-- /.section-features -->

        <section class="site-section section-services gray-bg text-center">
            <div class="container">
                <h2 class="heading-separator">Our Services</h2>
                <p class="subheading-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-xs-6">
                        <div class="service">
                            <i class="fa-regular fa-heart fa-5x"></i>
                            <h3 class="service-title">Caring</h3>
                            <p class="service-info">We offer a holistic continuum of caring to individuals who are ready to make a commitment to be effective and special in our world.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-lg-4 col-md-3 col-xs-6">
                        <div class="service">
                            <img src="/img/basket.svg" alt="">
                            <h3 class="service-title">Ecommerce</h3>
                            <p class="service-info">You can shop to get all the things you need for your child from food, drinks and medical and life supplies.</p>
                        </div><!-- /.service -->
                    </div>
                    
                    <div class="col-lg-4 col-md-3 col-xs-6">
                        <div class="service">
                            <i class="fa-regular fa-building fa-5x"></i>
                            <h3 class="service-title">Clinics and centers</h3>
                            <p class="service-info">We direct you to the clinic and the specialized center that suits your child to provide the best care for your child with the modernist methods.</p>
                        </div><!-- /.service -->
                    </div>
                </div><!-- End first row of services -->
                <div class="row second-row-services">
                    <div class="col-lg-4 col-md-3 col-xs-6">
                        <div class="service">
                            <i class="fa-regular fa-comments fa-5x"></i>
                            <h3 class="service-title">Sharing experiences</h3>
                            <p class="service-info">Sharing experiences with all those who have previous experiences similar to yours will certainly contribute to your child's development in the way you aspire to. </p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-lg-4 col-md-3 col-xs-6">
                        <div class="service">
                            <img src="/img/microphone.svg" alt="">
                            <h3 class="service-title">Support</h3>
                            <p class="service-info">A support network can include a variety of forms of interaction with a range of people who can support you in different ways. </p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-lg-4 col-md-3 col-xs-6">
                        <div class="service">
                            <i class="fa-regular fa-face-smile-beam fa-5x"></i>
                            <h3 class="service-title">Motivation</h3>
                            <p class="service-info">Never give up, we have a dedicated team to keep your spirits high on this long journey with tremendous results.</p>
                        </div><!-- /.service -->
                    </div>
                </div>
            </div>
        </section><!-- /.section-services -->

        <section class="site-section section-map-feature text-center">

            <div class="container">
                <h2>Responsive Web Design</h2>
                <p>Web design is responsive design. Responsive web design is web design, done right.</p>
                <a href="#" class="btn btn-fill">Learn More</a>
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <div class="counter-item">
                            <p class="counter" data-to="8000" data-speed="1000">0</p>
                            <h3>million Adult autism spectrum</h3>
                        </div><!-- /.counter-item -->
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="counter-item">
                            <p class="counter" data-to="7000" data-speed="1000">0</p>       
                            <h3>Down syndrome</h3>
                        </div> <!-- /.counter-item -->      
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="counter-item">
                            <p class="counter" data-to="120000" data-speed="1000">0</p>
                            <h3>Celiac disease</h3>
                        </div><!-- /.counter-item -->
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="counter-item">
                            <p class="counter" data-to="430000" data-speed="1000">0</p>
                            <h3>Average Deal</h3>
                        </div><!-- /.counter-item -->
                    </div>
                </div>
            </div>
            
        </section><!-- /.section-map-feature -->
{{-- 
        <section class="site-section section-portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="heading-separator">Latest Blogs</h2>
                    <p class="subheading-text">This is some of our best blogs</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="/img/portfolio-1.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Portfolio item</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="/img/portfolio-2.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Portfolio item</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="/img/portfolio-3.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Portfolio item</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="/img/portfolio-4.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Portfolio item</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="/img/portfolio-5.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Portfolio item</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="/img/portfolio-6.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Portfolio item</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="/img/portfolio-1.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Portfolio item</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="/img/portfolio-2.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Portfolio item</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                </div>
            </div>
        </section><!-- /.section-portfolio --> --}}

        <section class="site-section section-newsletter text-center">
            <div class="container">
                <h2>Subscribe our newsletters</h2>
                <form class="form-group newsletter-group">
                    <input type="email" class="form-control" placeholder="Your e-mail" required>
                    <button class="btn btn-green" type="button">Subscribe</button>
                </form><!-- /.newsletter-group -->
            </div>
        </section><!-- /.section-newsletter -->

    </main><!-- /#main -->

  
@endsection
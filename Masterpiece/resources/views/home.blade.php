@extends('layout.master')
@section('title','Home')
@section('layout.content')
    <div id="hero" class="hero overlay">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Your story begins from here.</h1>
                <p>Your clients on the internet. Learn how to receive them.</p>
                <a href="#" class="btn btn-border">Learn more</a>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section section-features">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Responsive web design</h2>
                        <p>Responsive Web design is the approach that suggests that design and development should respond to the user's behavior and environment based on screen size, platform and orientation. The practice consists of a mix of flexible grids and layouts, images and an intelligent use of CSS media queries</p>
                    </div>
                    <div class="col-sm-7 hidden-xs">
                        <img src="/img/ipad-pro.png" alt="">
                    </div>
                </div>
            </div>
        </section><!-- /.section-features -->

        <section class="site-section section-services gray-bg text-center">
            <div class="container">
                <h2 class="heading-separator">Our Services</h2>
                <p class="subheading-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="/img/anchor.svg" alt="">
                            <h3 class="service-title">Branding</h3>
                            <p class="service-info"> Learn why your brand is a valuable component when it comes to your marketing communication and why you don't want to be without one.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="/img/bycicle.svg" alt="">
                            <h3 class="service-title">Design</h3>
                            <p class="service-info">The strength of a design lies as much in the steps taken to create it as in the final result. </p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="/img/paper-plane.svg" alt="">
                            <h3 class="service-title">Development</h3>
                            <p class="service-info">Development is a way to make people aware of the services and/or products you are offering.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="/img/photo.svg" alt="">
                            <h3 class="service-title">Photography</h3>
                            <p class="service-info">Photographs are the legacy you leave for generations to come.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="/img/microphone.svg" alt="">
                            <h3 class="service-title">Support</h3>
                            <p class="service-info">A support network can include a variety of forms of interaction with a range of people who can support you in different ways. </p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="/img/rocket.svg" alt="">
                            <h3 class="service-title">Marketing</h3>
                            <p class="service-info">Marketing is of vital importance to any business. It is the key process of researching, promoting and selling products or services to your target.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="/img/basket.svg" alt="">
                            <h3 class="service-title">Ecommerce</h3>
                            <p class="service-info">When customers are deciding on a purchase, they start by looking online.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="/img/chemestry.svg" alt="">
                            <h3 class="service-title">Coding</h3>
                            <p class="service-info">We use the best coding practices</p>
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
                            <p class="counter" data-to="377" data-speed="2000">0</p>
                            <h3>Cofee Cups</h3>
                        </div><!-- /.counter-item -->
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="counter-item">
                            <p class="counter" data-to="1204" data-speed="2000">0</p>       
                            <h3>Projects completed</h3>
                        </div> <!-- /.counter-item -->      
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="counter-item">
                            <p class="counter" data-to="459" data-speed="1000">0</p>
                            <h3>Happy Clients</h3>
                        </div><!-- /.counter-item -->
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="counter-item">
                            <p class="counter" data-to="675" data-speed="1000">0</p>
                            <h3>Average Deal</h3>
                        </div><!-- /.counter-item -->
                    </div>
                </div>
            </div>
            
        </section><!-- /.section-map-feature -->

        <section class="site-section section-portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="heading-separator">Latest Work</h2>
                    <p class="subheading-text">This is some of our best work</p>
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
        </section><!-- /.section-portfolio -->

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
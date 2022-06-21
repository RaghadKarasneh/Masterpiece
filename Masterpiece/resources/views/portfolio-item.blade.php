@extends('layout.master')
@section('title','Home')
@section('layout.content')

    <div id="hero" class="hero overlay subpage-hero portfolio-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Project Name</h1>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./">Home</a></li>
                  <li class="breadcrumb-item"><a href="./portfolio">Portfolio</a></li>
                  <li class="breadcrumb-item active">Project name</li>
                </ol>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section subpage-site-section section-project">

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="project-img">
                            <img src="/img/portfolio-1.jpg" class="img-res" alt="">
                        </div><!-- /.project-img -->
                        <div class="project-img">
                            <img src="/img/portfolio-2.jpg" class="img-res" alt="">
                        </div><!-- /.project-img -->
                        <div class="project-img">
                            <img src="/img/portfolio-3.jpg" class="img-res" alt="">
                        </div><!-- /.project-img -->

                    </div>
                    <aside class="col-md-4">
                        <div class="project-info">
                            <h5>Description</h5>

                            <p class="project-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                            <div class="project-date-category">
                                <p><span>Date:</span> March 1, 2017</p>
                                <p><span>Category:</span> Branding, Graphic design</p>
                            </div><!-- /.project-cat -->

                            <a href="#" class="btn btn-gray">Visit Site</a>

                            <div class="social-links">
                                <a class="twitter-bg" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="facebook-bg" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                                <a class="linkedin-bg" href="#"><i class="fa fa-linkedin"></i></a>
                            </div><!-- /.social-links -->
                            
                        </div><!-- /.project-description -->
                    </aside>
                </div>
            </div>
            
        </section><!-- /.section-project -->

        <section class="site-section subpage-site-section section-related-projects">
            <div class="container">
                <div class="text-left">
                    <h2>Related Projects</h2>
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
                </div>
            </div>
        </section><!-- /.section-portfolio -->

    </main><!-- /#main -->
@endsection
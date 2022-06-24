@extends('layout.master')
@section('title','Home')
@section('css','blogs.css')
@section('layout.content')
    <div id="hero" class="hero overlay subpage-hero centers-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Centers & Clinics</h1>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./">Home</a></li>
                  <li class="breadcrumb-item active">Centers & Clinics</li>
                </ol>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section subpage-site-section section-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <article class="blog-post">
                            <a href="./blog-post">
                                <img src="/img/centers/autismNight.png" class="img-res" alt="">
                            </a>
                            <div class="post-content">
                                <h3 class="post-title">Autism Academy of Jordan</h3>
                                <p>Autism Academy of Jordan was established as the first specialized Jordanian center to serve and care for children with autism from within the Hashemite Kingdom of Jordan and from sister Arab countries and friendly countries in 2004.
                                    Where the latest educational and rehabilitation programs are provided through qualified staff trained in our accredited programs before they start working with enrolled students.</p>
                                {{-- <div class="text-right">
                                    <a class="read-more" href="./blog-post">Read more</a>
                                </div> --}}
                                <div class="post-meta">
                                    <span class="post-author">
                                        <a><i class="fa fa-envelope" aria-hidden="true"></i>info@aaj.jo</a>
                                    </span>
                                    <span class="post-date">
                                        <a><i class="fa fa-phone" aria-hidden="true"></i>(06) 523 5007</a>
                                    </span>
                                    <span class="post-author">
                                        <a href="https://www.instagram.com/autism.aj/" target="_blank"><i class="fa fa-instagram"></i>autism.aj</a>
                                    </span>
                                    <span class="post-author">
                                        <a href="https://www.facebook.com/autism.aj" target="_blank"><i class="fa-brands fa-facebook-square"></i>Autism Academy of Jordan</a>
                                    </span>
                                    
                                    {{-- <span class="post-category">
                                        <a href=""><i class="fa fa-folder" aria-hidden="true"></i>Web Design</a>
                                    </span> --}}
                                </div><!-- /.post-meta -->
                            </div><!-- /.post-content -->
                        </article><!-- /.blog-post -->
                        <article class="blog-post">
                            <a href="blog-post.html">
                                <img src="/img/centers/special_education.png" class="img-res" alt="">
                            </a>
                            <div class="post-content">
                                <h3>People of determination center for special education</a></h3>
                                <p>Global programs and a specialized team to deal with cases in accordance with children's needs and mental abilities.
                                Autism, development delay, Joubert syndrome, Turner syndrome, Down syndrome, Angelman syndrome and Arts syndrome.</p>
                                <div class="post-meta row">
                                    <span class="post-author col-lg-5">
                                        <a><i class="fa fa-envelope" aria-hidden="true"></i>people.determination@gmail.com</a>
                                    </span>
                                    <span class="post-date col-lg-3">
                                        <a><i class="fa fa-phone" aria-hidden="true"></i>07 9660 0340</a>
                                    </span>
                                </div>
                                <div class="post-meta row">
                                    <span class="post-author col-lg-5">
                                        <a><i class="fa fa-whatsapp"></i>+962 7 9660 0340</a>
                                    </span>
                                    <span class="post-author col-lg-4">
                                        <a href="https://www.facebook.com/autism.aj" target="_blank"><i class="fa-brands fa-facebook-square"></i>Autism Academy of Jordan</a>
                                    </span>
                                    {{-- <span class="post-category">
                                        <a href=""><i class="fa fa-folder" aria-hidden="true"></i>Web Development</a>
                                    </span> --}}
                                </div><!-- /.post-meta -->
                            </div><!-- /.post-content -->
                        </article><!-- /.blog-post -->
                        

                        <div class="ui-pagination mt-50">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <ul class="pagination">
                                        <li><a href="#">&lt;&lt;</a></li>
                                        <li><a href="#">&lt;</a></li>
                                        <li class="more"><a href="#">...</a></li>
                                        <li><a href="#">31</a></li>
                                        <li class="active"><a href="#">32</a></li>
                                        <li><a href="#">33</a></li>
                                        <li class="more"><a href="#">...</a></li>
                                        <li><a href="#">&gt;</a></li>
                                        <li><a href="#">&gt;&gt;</a></li>
                                    </ul><!-- /.pagination -->               
                                </div>
                            </div>
                        </div><!-- /.ui-pagination -->
                    </div>
                    <aside class="col-md-4">
                        <div class="sidebar">
                            <div class="widget search-form">
                                <h4 class="widget-title">Search the blog</h4>
                                <form class="form-group">
                                    <input type="text" class="form-control" placeholder="Search" required>
                                    <button class="btn btn-green" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div><!-- /.search-form -->
                            <div class="widget widget-recent-posts">
                                <h4 class="widget-title">Recent posts</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#">Inside The Lipsum</a></li>
                                    <li><a href="#">Oscar Wilde</a></li>
                                    <li><a href="#">Jeffrey Ween</a></li>
                                    <li><a href="#">Responsive Design</a></li>
                                    <li><a href="#">Development</a></li>
                                </ul>
                            </div><!-- /.widget-recent-posts -->
                            <div class="widget widget-categories">
                                <h4 class="widget-title">Categories</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Blogs</a></li>
                                    <li><a href="#">Clinics & Centers</a></li>
                                    <li><a href="#">Parents' Experiences</a></li>
                                    <li><a href="#">Motivation</a></li>
                                </ul>
                            </div><!-- /.widget-categories -->
                            {{-- <div class="widget widget-tags">
                                <h4 class="widget-title">Tags</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">Web Development</a></li>
                                    <li><a href="#">PSD Template</a></li>
                                    <li><a href="#">Responsive Design</a></li>
                                    <li><a href="#">Development</a></li>
                                </ul>
                            </div><!-- /.widget-tags --> --}}
                        </div><!-- /.sidebar -->
                    </aside>
                </div>
            </div>
        </section><!-- /.section-portfolio -->

    </main><!-- /#main -->


@endsection
@extends('layout.master')
@section('title','Home')
@section('css','motivation.css')
@section('layout.content')
    <div id="hero" class="hero overlay subpage-hero motivation-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Motivation</h1>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./">Home</a></li>
                  <li class="breadcrumb-item active">Motivation</li>
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
                            <div class="post-content">
                                <iframe width="100%" height="538" src="https://www.youtube.com/embed/Bd2SsGZlB94" title="An inspiring speech by a great man with Down syndrome" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <h3 class=" mx-auto">I am a man with Dawn's syndrome and my life is worth living!</h3>
                               
                            </div><!-- /.post-content -->
                        </article><!-- /.blog-post -->
                        <article class="blog-post">
                            <div class="post-content">
                                <iframe width="100%" height="538" src="https://www.youtube.com/embed/Cau5MJ-fRsU" title="YOU ARE MORE DISABLED THAN ME ft. Nick Vujicic - MOTIVATIONAL VIDEO" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <h3 class=" mx-auto">You are more disabled than me</h3>
                                
                               
                            </div><!-- /.post-content -->
                        </article><!-- /.blog-post -->
                        <article class="blog-post">
                            <div class="post-content">
                                <iframe width="100%" height="538" src="https://www.youtube.com/embed/U93pF07e62o" title="Motivational Speech by a handicapped women" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <h3 class=" mx-auto">They see my disability, I see my ability</h3>
                               
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
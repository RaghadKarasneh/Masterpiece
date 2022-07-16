@extends('layout.master')
@section('title','Home')
@section('css','blogs.css')
@section('layout.content')
    <div id="hero" class="hero overlay subpage-hero blog-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Blogs</h1>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./">Home</a></li>
                  <li class="breadcrumb-item active">Blogs</li>
                </ol>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section subpage-site-section section-blog">
            <div class="container">
                <div class="col-lg-9">
                    <div class="row" id="grid">
                  {{-- <div class="col-md-8" > --}}
                        @foreach ($blog as $value)
                        
                        <article class="blog-post col-lg-12 col-md-4" data-groups='["{{$value->special_type}}"]'>
                            <a href={{$value->blog_body}}>
                                <img src="{{$value->blog_img}}"  class="img-res" alt="">
                            </a>
                            <div class="post-content">
                                <h3 class="post-title"><a href={{$value->blog_body}} target="_blank">{{$value->blog_title}}</a></h3>
                                <p>{{$value->short_p}}...</p>
                                <div class="post-meta mt-20">
                                    <span class="post-author">
                                        <span>Written by: {{$value->author_name}}</span>
                                    </span>
                                    <span class="post-date">
                                        <a><i class="fa fa-calendar" aria-hidden="true"></i>{{$value->created_at}} </a>
                                    </span>
                                    <span class="post-author text-right">
                                        <a class="read-more" href={{$value->blog_body}} target="_blank">Read more</a>
                                    </span>
                                    {{-- <span class="post-category">
                                        <a href=""><i class="fa fa-folder" aria-hidden="true"></i>Web Design</a>
                                    </span> --}}
                                </div><!-- /.post-meta -->
                            </div><!-- /.post-content -->
                        </article><!-- /.blog-post -->
                        @endforeach
                        
                    </div>
                <div class="text-center">
                            <a class="btn btn-gray" href="#" id="loadMore">Load More</a>
                        </div></div>
                    <aside class="col-lg-3 col-md-4">
                        <div class="sidebar">
                            {{-- <div class="widget search-form">
                                <h4 class="widget-title">Search the blog</h4>
                                <form class="form-group">
                                    <input type="text" class="form-control" placeholder="Search" required>
                                    <button class="btn btn-green" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div><!-- /.search-form --> --}}
                            <div class="widget widget-recent-posts">
                                <h4 class="widget-title">Blogs Categories</h4>
                                <ul class="list-unstyled portfolio-sorting">
                                    <li><a href="#" class=" active" data-group="all">All</a></li>
                                    <li><a href="#" class="" data-group="Autism">Autism</a></li>
                                    <li><a href="#" class="" data-group="Down Syndrome">Down Syndrome</a></li>
                                    <li><a href="#" class="" data-group="Paralysis">Paralysis</a></li>
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
        </section><!-- /.section-portfolio -->

    </main><!-- /#main -->


@endsection
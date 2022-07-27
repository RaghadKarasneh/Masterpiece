@extends('layout.master')
@section('title','Home')
@section('css','experiences.css')
@section('layout.content')

    <div id="hero" class="hero overlay subpage-hero experience-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Parents' Experiences</h1>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./">Home</a></li>
                  <li class="breadcrumb-item active">Experiences</li>
                </ol>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">
        <section class="site-section subpage-site-section section-blog">
            <div class="container">
        <div class="col-lg-9">
        
            <div class="row">
                <div class="col-md-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">Post Your Experience</div>
        
                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form id="comment-form" method="get" action="{{ route('comments.store') }}" >
                                {{ csrf_field() }}
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
                                <div class="row" style="padding: 10px;">
                                    <div class="form-group">
                                        <input class="form-control" name="comment"  placeholder="Post Your Experience">
                                        <select name="special_type">
                                            <option value="">Choose Special Type</option>
                                            <option value="Autism">Autism</option>
                                            <option value="Down Syndrome">Down Syndrome</option>
                                            <option value="Paralysis">Paralysis</option>
                                            
                                          </select>
                                   
                                
                                
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-lg" style="width: 100%" name="submit" value="Post">

                                    </div> </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
           
            
                 <div class="col-md-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">Old Experiences</div>
                       
                        <div class="panel-body comment-container" >
                            <div class="col-lg-12">
                                <div class="row" id="grid">
                            @foreach($comments as $comment)
                                <div class="well col-lg-12 col-md-4" data-groups='["{{$comment->special_type}}"]'>
                                   
                                    <i><b> {{ $comment->first_name }} {{ $comment->last_name }}</b></i>&nbsp;&nbsp;
                                    <span> {{ $comment->comment }} </span>
                                    <div style="margin-left:10px;">
                                        <a style="cursor: pointer;" cid="{{ $comment->id }}" name_a="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}" token="{{ csrf_token() }}" class="reply">Reply</a>&nbsp;
                                        {{-- <a style="cursor: pointer;"  class="delete-comment" token="{{ csrf_token() }}" comment-did="{{ $comment->id }}" >Delete</a> --}}
                                        <div class="reply-form">
{{--                                             
                                            <form id="reply-form" method="get" action="{{ route('replay.store') }}" >
                                                {{ csrf_field() }} 
                                                <input type="hidden" name="comment_id" value="{{ $comment->id }}" >
                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
                                                <div class="row" style="padding: 10px;">
                                                    <div class="form-group">
                                                        <input class="form-control" name="reply" cid="{{ $comment->id }} placeholder="Write something from your heart..!">
                                                    </div>
                                                </div>
                                                <div class="row" style="padding: 0 10px 0 10px;">
                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-primary btn-lg" style="width: 100%" name="submit">
                                                    </div>
                                                </div>
                                            </form>
                                             --}}
                                        </div>
                                        
                                        @foreach($replies as $rep) 
                                       
                                             @if($comment->id === $rep->comment_id)
                                                <div class="well">
                                                    <i><b> {{ $rep->first_name }} {{ $rep->last_name }}</b></i>&nbsp;&nbsp;
                                                    <span> {{ $rep->reply }} </span>
                                                    <div style="margin-left:10px;">
                                                        {{-- <a rname="{{ Auth::user()->first_name }}{{ Auth::user()->last_name }}" rid="{{ $comment->id }}" style="cursor: pointer;" class="reply-to-reply" token="{{ csrf_token() }}">Reply</a>&nbsp;
                                                        <a did="{{ $rep->id }}" class="delete-reply" token="{{ csrf_token() }}" >Delete</a> --}}
                                                    </div>
                                                    <div class="reply-to-reply-form">
                                            
                                                        <!-- Dynamic Reply form -->
                                                        
                                                    </div>
                                                    
                                                </div>
                                            @endif 
                                        @endforeach
                                        
                                    </div>
                                </div>
                            @endforeach
        
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="text-center">
                <a class="btn btn-gray" href="#" id="loadMore">Load More</a>
            </div>
        
        </div>
                    
                    </div>
        </div>
                    <aside class="col-lg-3 col-md-4">
                        <div class="sidebar">
                            {{-- <div class="widget search-form">
                                <h4 class="widget-title">Search the blog</h4>
                                <form class="form-group">
                                    <input type="text" class="form-control" placeholder="Search" required>
                                    <button class="btn btn-green" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div><!-- /.search-form --> --}}
                            
                        </div>
                        <aside class="col-lg-3 col-md-4">
                            <div class="sidebar">
                                <div class="widget widget-recent-posts">
                                    <h4 class="widget-title">Posts Categories</h4>
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
            </div>
        </div>
        </section><!-- /.section-portfolio -->

    </main><!-- /#main -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/comment_replay.js') }}"></script>
@endsection


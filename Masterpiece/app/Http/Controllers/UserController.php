<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function homePageView(){
        return view('home');
    }
    public function imgView(){
        return view('img/logo');
    }
    public function blogView(){
        return view('blog');
    }
    public function blogPostView(){
        return view('blog-post');
    }
    public function contactView(){
        return view('contact');
    }
    public function portfolioView(){
        return view('portfolio');
    }
    public function portfolioItemView(){
        return view('portfolio-item');
    }
}

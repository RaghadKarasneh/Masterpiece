<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{    
    // View Home Page
    public function homePageView(){
        return view('home');
    }
    public function imgView(){
        return view('img/logo');
    }
    // View Blog Page
    public function blogView(){
        return view('blog');
    }
    // View Blog-Post Page
    public function blogPostView(){
        return view('blog-post');
    }
    // View Experiences Page
    public function experiencesView(){
        return view('experiences');
    }
    // View Contact Page
    public function contactView(){
        return view('contact');
    }
    // View Portfolio Page
    public function portfolioView(){
        return view('portfolio');
    }
     // View Jobs Page
     public function jobsView(){
        return view('jobs');
    }
}

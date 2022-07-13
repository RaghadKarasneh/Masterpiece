<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{    
    // View Home Page
    public function homePageView(){
        return view('index');
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
    //View Centers & Clinics Page
    public function centers_clinicsView(){
        return view('centers&clinics');
    }
    //View Motivation Page
    public function motivationView(){
        return view('motivation');
    }
    //View Shop Page
    public function shopView(){
        return view('shop');
    }
    //View Cart Page
    public function cartView(){
        return view('cart');
    }
    //View Checkout Page
    public function checkoutView(){
        return view('checkout');
    }
     //View Bill Page
     public function billView(){
        return view('bill');
    }
}

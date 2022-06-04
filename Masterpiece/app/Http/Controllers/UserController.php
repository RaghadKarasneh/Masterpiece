<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function homePageView(){
        return view('layout.index');
    }
    public function imgView(){
        return view('img/logo');
    }
}

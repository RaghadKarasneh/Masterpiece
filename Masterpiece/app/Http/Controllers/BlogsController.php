<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blogs;

class BlogsController extends Controller
{
    public function blogView(){
        $blog=Blogs::all();
        return view('blog',compact('blog'));
    }
}

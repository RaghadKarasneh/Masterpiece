<?php

namespace App\Http\Controllers;

// namespace App\Models;
use Illuminate\Http\Request;
use App\Models\ExperienceComments;
class ExperiencesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = ExperienceComments::latest('created_at')->get();
        return view('experiences', ['comments' => $comments]);
    }

    /* */
}
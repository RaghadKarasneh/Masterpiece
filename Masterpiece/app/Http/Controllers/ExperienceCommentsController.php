<?php

namespace App\Http\Controllers;

use App\Models\ExperienceComments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
                $add=new ExperienceComments();
                $add->user_id = Auth::user()->id;
                $add->first_name = Auth::user()->first_name;
                $add->last_name= Auth::user()->last_name;
                $add->comment= $request->input('comment');
                $add->save();
            

            return redirect()->route('home')->with('success','Comment Added successfully..!');
        }else{
            return back()->withInput()->with('error','Something wrong');
        }


        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExperienceComments   $comment
     * @return \Illuminate\Http\Response
     */
    public function show(ExperienceComments  $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExperienceComments   $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(ExperienceComments  $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExperienceComments  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExperienceComments $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExperienceComments $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExperienceComments $comment)
    {
        if (Auth::check()) {

            $reply = ExperienceReplies::where(['comment_id'=>$comment->id]);
            $comment = ExperienceComments::where(['user_id'=>Auth::user()->id, 'id'=>$comment->id]);
            if ($reply->count() > 0 && $comment->count() > 0) {
                $reply->delete();
                $comment->delete();
                return 1;
            }else if($comment->count() > 0){
                $comment->delete();
                return 2;
            }else{
                return 3;
            }

        }   
    }
}

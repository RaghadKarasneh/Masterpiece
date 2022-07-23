<?php

namespace App\Http\Controllers;

use App\Models\ExperiencesReplies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ExperienceRepliesController extends Controller
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
           $reply= new ExperiencesReplies();
           $reply->comment_id= $request->input('comment_id');
           $reply->first_name =Auth::user()->first_name;
           $reply->last_name =Auth::user()->last_name;
           $reply->reply = $request->input('reply');
           $reply->user_id = Auth::user()->id;
           $reply->save();
        
           return redirect()->route('home')->with('success','Comment Added successfully..!');
        }
else
        return back()->withInput()->with('error','Something wrong');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExperiencesReplies $reply
     * @return \Illuminate\Http\Response
     */
    public function show(ExperiencesReplies $reply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExperiencesReplies  $reply
     * @return \Illuminate\Http\Response
     */
    public function edit(ExperiencesReplies $reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExperiencesReplies  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExperiencesReplies $reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExperiencesReplies $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExperiencesReplies $reply)
    {
        if (Auth::check()) {
            $reply = ExperiencesReplies::where(['id'=>$reply->id,'user_id'=>Auth::user()->id]);
            if ($reply->delete()) {
                return 1;
            }else{
                return 2;
            }
        }else{

        }
        return 3;
    }
}

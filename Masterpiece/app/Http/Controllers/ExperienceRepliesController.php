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
            ExperiencesReplies::create([
                'comment_id' => $request->input('comment_id'),
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'reply' => $request->input('reply'),
                'user_id' => Auth::user()->id
            ]);

            return redirect()->route('home')->with('success','Reply added');
        }

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
    public function update(Request $request, Reply $reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\c  $c
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

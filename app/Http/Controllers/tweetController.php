<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tweetController extends Controller
{
    public function show() {
        $tweets = \App\tweet::all();
        return view('profile', ['tweets' => $tweets]);
    }

    function createTweet(Request $request){
        if(auth::check()) {
            // $result = \App\tweet::find(4)

            $tweet = new \App\tweet;
            $tweet->author = $request->author;
            $tweet->content = $request->content;
            $tweet->save();

            $result = \App\tweet::all();

            return view('profile', ['tweets' => $result]);
        }else{
            return view('profile');
        }

    }
}

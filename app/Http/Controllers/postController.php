<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    function show(){
        if(auth::check() {
            // $result = \App\tweet::find(4)

            $tweet = new \App\Tweet;
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

function validateTweets(request $request) {
    $data = $request->validate([
        'content' => 'required|min:10|max:25',
        'author' =>
    ]);
}

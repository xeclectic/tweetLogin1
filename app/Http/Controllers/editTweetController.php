<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class editTweetController extends Controller
{
    public function updateTweet(Request $request, $id) {
        $tweet = \App\tweet::find($id);
        $tweet->author = $request->author;
        $tweet->content = $request->content;

        $tweet->save();
    }
}

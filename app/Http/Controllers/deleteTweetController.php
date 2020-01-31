<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deleteTweetController extends Controller
{
    public function deleteTweet($id) {
        $tweet = \App\tweet::find($id);
        $tweet->delete();

        $result = \App\tweet::all();

        return view('profile', ['tweets' => $result]);
    }
}

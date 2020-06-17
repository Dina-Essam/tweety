<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetLikesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Tweet $tweet)
    {
        $tweet->like(auth()->user());

        return back();
    }

    public function destroy(Tweet $tweet)
    {
        $tweet->dislike(auth()->user());

        return back();
    }
}

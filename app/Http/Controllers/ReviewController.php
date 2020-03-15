<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Review;
use App\Movie;

class ReviewController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $review = new Review;
        $review->review = $request->get('review_body');
        $review->user()->associate($request->user());
        $movie = Movie::find($request->get('movie_id'));
        $movie->review()->save($review);
        return back();
    }

    public function destroy($id){
	     $review=Review::find($id);
	     if ($review->user_id !== Auth()->user()->id){
             return back()->with('error', 'You are not authorized to delete the post.');
         }

//        dd($review);
        $review->delete();
        return back()->with('success', 'Post Removed');

    }

    // public function replyStore(Request $request)
    // {
    //     $reply = new Review();
    //     $reply->body = $request->get('review_body', 'required');
    //     $reply->user()->associate($request->user());
    //     $reply->parent_id = $request->get('review_id');
    //     $post = Movie::find($request->get('moview_id'));

    //     $post->review()->save($reply);

    //     return back();

    // }
}

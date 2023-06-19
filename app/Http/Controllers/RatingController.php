<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $user = auth()->user();
        $rating = Rating::where('user_id', $user->id)->where('post_id', $post->id)->first();

        if ($rating) {
            // Update the existing rating
            $rating->rating = $request->input('rating');
            $rating->save();
            return redirect()->back()->with('success', 'Rating updated successfully.');
        } else {
            // Create a new rating
            $rating = new Rating();
            $rating->user_id = $user->id;
            $rating->post_id = $post->id;
            $rating->rating = $request->input('rating');
            $rating->save();
            return redirect()->back()->with('success', 'Rating submitted successfully.');
        }
    }
}

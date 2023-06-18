<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class CommentController extends Controller
{
    //

    public function store(Request $request){

        // $post = new Post();
        // $requestData = $request->all();
        // $requestData['post_id'] = $post->id;
        // $comment = new Comment();
        // // $comment->post_id = $post->id;
        // $comment->body = $request->body;
        // $comment->save();

        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->body = $request->body;
        $comment->save();

        return back()->with(['message'=>'Comment Added Successfully!']);
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(){
        return view('h.posts.newpost');
    }

    public function store(Request $request){
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->location = $request->location;
        //$post->image = $request->image;

        $post->save();
        return back()->with(['message','Post added successfully!']);
    }

}

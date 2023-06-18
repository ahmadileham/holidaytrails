<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PostController extends Controller
{
    public function newpost(){
        // $user = Auth::user();
        return view('h.posts.newpost');
    }

    public function home(){
        $posts = Post::all();
        $user = Auth::user();
        return view('h.home',compact('user'),['posts'=>$posts]);
    }

    public function store(Request $request){
        $user = Auth::user();
        $requestData = $request->all();
        $requestData['userid'] = $user->id;
        $fileName = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/' .$path;
        Post::create($requestData);

        return back()->with(['message','Post added successfully!']);
    }

    public function viewpost($id){
        $post = Post::find($id);
        $user = Auth::user();

        return view('h.posts.viewpost', ['post'=>$post], compact('user'));
    }
}

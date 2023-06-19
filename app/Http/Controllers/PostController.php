<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class PostController extends Controller
{
    public function newpost(){
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

    public function editpost($id){
        $post = Post::find($id);
        $user = Auth::user();
        return view('h.posts.editpost', ['post'=>$post], compact('user'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Retrieve the user IDs matching the search query
        $userIds = User::where('name', 'like', "%$query%")->pluck('id');

        // Retrieve the posts matching the search query
        $posts = Post::where('title', 'like', "%$query%")
            ->orWhere('location', 'like', "%$query%")
            ->orWhereIn('userid', $userIds)
            ->get();

        return view('h.posts.search', compact('posts'));
    }
}

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

        // $image_image ="";
        // if($request->hasFile('image')){
        //     $image = $request->file('image');
        //     $image_image = $image->getClientOriginalName();
        // }

        // $post = new Post();
        // $post->title = $request->title;
        // $post->description = $request->description;
        // $post->location = $request->location;
        // $post->image = $image_image;

        // $post->save();

        // $this->uploadImage($request, $post->id);

        $requestData = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/' .$path;
        Post::create($requestData);

        return back()->with(['message','Post added successfully!']);
    }

    public function uploadImage(Request $request, $post_id){

        if($request->hasFile('image')){

            $path = public_path("post_images/post_$post_id");

            if(! file_exists($path)){
                mkdir($path, 0777, true);
            }

            $image = $request->file('image');
            $image_image = $image->getClientOriginalName();

            $image->move($path, $image_image);
        }

    }

}

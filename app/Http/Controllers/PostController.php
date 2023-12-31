<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\PostUpdateRequest;


class PostController extends Controller
{
    public function newpost(){
        return view('h.posts.newpost');
    }

    public function home(Request $request)
    {
        $user = Auth::user();
        $rating = $request->query('rating');
        $searchQuery = $request->query('query');

        $postQuery = Post::query();

        if ($rating !== null) {
            $postQuery->whereHas('ratings', function ($query) use ($rating) {
                $query->havingRaw('FLOOR(AVG(rating)) = ?', [$rating]);
            });
        }

        if ($searchQuery) {
            $postQuery->where(function ($query) use ($searchQuery) {
                $query->where('title', 'like', "%$searchQuery%")
                    ->orWhere('location', 'like', "%$searchQuery%")
                    ->orWhereHas('user', function ($query) use ($searchQuery) {
                        $query->where('name', 'like', "%$searchQuery%");
                    });
            });
        }

        $posts = $postQuery->get();

        return view('h.home', compact('user', 'posts', 'rating'));
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

    public function viewpost($id)
    {
        $post = Post::findOrFail($id);
        $user = Auth::user();
        return view('h.posts.viewpost', compact('post', 'user'));
    }

    public function editpost($id){
        $post = Post::find($id);
        $user = Auth::user();
        return view('h.posts.editpost', ['post'=>$post], compact('user'));
    }

    public function update(Request $request){
        $id = Auth::user()->id;
        $post = Post::find($id);

        $post->title=$request->title;
        $post->description=$request->description;
        $post->location=$request->location;
        $post->save();

        return view('h.posts.viewpost', ['post'=>$post]);
    }

//   public function search(Request $request)
//     {
//         $query = $request->input('query');
//         $rating = $request->input('rating');

//         $userIds = User::where('name', 'like', "%$query%")->pluck('id');

//         $postQuery = Post::where('title', 'like', "%$query%")
//             ->orWhere('location', 'like', "%$query%")
//             ->orWhereIn('userid', $userIds);

//         if ($rating !== null) {
//             $postQuery->whereHas('ratings', function ($query) use ($rating) {
//                 $query->havingRaw('FLOOR(AVG(rating)) = ?', [$rating]);
//             });
//         }

//         $posts = $postQuery->get();

//         return view('h.posts.search', compact('posts', 'rating'));
//     }

    public function destroy(Request $request)
    {
        $id = Auth::user()->id;
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('myprofile')
         ->withSuccess(__('Post deleted successfully.'));
    }

}

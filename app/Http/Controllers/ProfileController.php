<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function home(){
        return view('h.home');
    }

    public function UserLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    // public function analysis(){
    //     return view('h.analysis');
    // }


    public function analysis(){
        return view('h.analysis');
    }

    public function othersprof(){
        return view('h.othersprof');
    }

    public function ownprof(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        $posts = Post::where('userid', $id)->get();
        return view('h.ownprof',compact('profileData'), ['posts'=>$posts]);
    }

    public function viewpost(){
        return view('h.viewpost');
    }

     public function settings(){
        // $user = Auth::user();
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('h.settings',compact('profileData'));
    }

    public function settingsStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name=$request->name;
        $data->about=$request->about;
        $data->email=$request->email;

        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/'.$data->photo));
            $filename = date('YdmHi').$file->getClientOriginalName();
            $file->move(public_path('upload'),$filename);
            $data['photo']=$filename;
        }

        $data->save();

        return redirect()->back();
    }

    public function profilePass(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('h.changePass',compact('profileData'));
    }

    public function updatePassword(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password'=>'required|confirmed'
        ]);

        if(!Hash::check($request->old_password, auth::user()->password)){
            $notification = array(
                'message' => 'Old Password Does Not Match.',
                'alert-type' => 'error'   
            );
            return back()->with($notification);
        }

        User::whereId(auth()->user()->id)->update([
            'password'=>Hash::make($request->new_password)
        ]);

        $notification = array(
                'message' => 'Ngam',
                'alert-type' => 'success'   
            );

        return back()->with($notification);
    }

}

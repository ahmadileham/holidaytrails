<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

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
        // $user = Auth::user();
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('h.home',compact('profileData'));
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

    public function editpost(){
        // $user = Auth::user();
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('h.editpost',compact('profileData'));
    }

    public function analysis(){
        // $user = Auth::user();
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('h.analysis',compact('profileData'));
    }

    public function othersprof(){
        // $user = Auth::user();
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('h.othersprof',compact('profileData'));
    }

    public function ownprof(){
        // $user = Auth::user();
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('h.ownprof',compact('profileData'));
    }

    public function viewpost(){
        // $user = Auth::user();
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('h.viewpost',compact('profileData'));
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
            $filename = date('YdmHi').$file->getClientOriginalName();
            $file->move(public_path('upload'),$filename);
            $data['photo']=$filename;
        }

        $data->save();

        return redirect()->back();
    }
}

@extends('h.master')
@section('title','Change Password')

@section('content')
<div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: white;">    
    <form method="POST" action="{{ route('profle.update.pass') }}" enctype="multipart/form-data">
        @csrf
        <p class="faded" style="text-align: left; margin-top: 20px;">Old Password</p>
        <input type="password" id="old_password" name="old_password" 
        class="form-control @error('old_password') is-invalid @enderror"
        style="margin-top: 20px; border-radius: 5px; width: 500px; border: 1px solid; padding: 10px"
        >
        @error('old_password')
        <span>{{ $message }}</span>
        @enderror

        <p class="faded" style="text-align: left; margin-top: 20px;">New Password</p>
        <input type="password" id="new_password" name="new_password" 
        class="form-control @error('new_password') is-invalid @enderror"
        style="margin-top: 20px; border-radius: 5px; width: 500px; border: 1px solid; padding: 10px"
        >
        @error('new_password')
        <span>{{ $message }}</span>
        @enderror

        <p class="faded" style="text-align: left; margin-top: 20px;">Confirm Password</p>
        <input type="password" id="new_password_confirmation" name="new_password_confirmation" 
        class="form-control"
        style="margin-top: 20px; border-radius: 5px; width: 500px; border: 1px solid; padding: 10px"
        >
        
            <br><button type="submit" class="btn" style="margin-top: 20px;">Save Changes</button>
    </form>
</div>
@endsection
@extends('h.master')

@section('title', 'User Profile')

@section('content')
<br><br><br>
    <div class="middle">
        <img id="Profile" src="{{ (!empty($profileData->photo)) ? url('upload/'.$profileData->photo) : url('upload/nophoto.png') }}" alt="Profile Picture">
        <p><strong>{{ $profileData->name }}</strong></p>
        <p>{{ $profileData->about }}</p>
    </div>

    <div class="pin_container">
        @foreach($posts as $post)
            <div class="card card_large">
                <img src="{{ asset($post->image) }}" alt="Post Image">
                <a href='{{ url("post/details/$post->id") }}'></a>
            </div>
        @endforeach
    </div>
@endsection

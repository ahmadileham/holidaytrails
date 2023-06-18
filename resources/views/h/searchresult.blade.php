@extends('h.master')

@section('title', 'Search results')

@section('content')
            <div class="pin_container">
                @foreach($posts as $key=>$post)
                    <div class="card card_medium"><a href='{{ url("post/details/$post->id") }}'><img src="{{ asset($post->image) }}" alt="Post Image"></a></div>
                @endforeach
            </div>
@endsection
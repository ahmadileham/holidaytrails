@extends('h.master')

@section('title', 'Home')

@section('content')
            <div style="height: 100%;" class="pin_container">
        @if ($posts->isEmpty())
        <div>
            <h3 style="padding-top: 10%;">No posts to show.</h3>
        </div>
        @else
            @foreach($posts as $key => $post)
                <div class="card card_medium"><a href='{{ url("post/details/$post->id") }}'><img src="{{ asset($post->image) }}" alt="Post Image"></a></div>
            @endforeach
        @endif
    </div>
@endsection
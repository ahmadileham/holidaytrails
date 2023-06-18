@extends('h.master')

@section('title', 'Search Results')

@section('content')
    <div class="pin_container">
        @if ($posts->isEmpty())
            <p>No search results found.</p>
        @else
            @foreach($posts as $key => $post)
                <div class="card card_medium"><a href='{{ url("post/details/$post->id") }}'><img src="{{ asset($post->image) }}" alt="Post Image"></a></div>
            @endforeach
        @endif
    </div>
@endsection
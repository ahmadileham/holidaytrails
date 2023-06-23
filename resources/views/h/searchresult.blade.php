@extends('h.master')

@section('title', 'Search results')

@section('content')
<div>
    <form class="filter-container" action="{{ route('home') }}" method="GET">
        <label for="rating-filter">Filter by Rating:</label>
        <select name="rating" id="rating-filter">
            <option value="">All Ratings</option>
            <option value="1">1 Star</option>
            <option value="2">2 Stars</option>
            <option value="3">3 Stars</option>
            <option value="4">4 Stars</option>
            <option value="5">5 Stars</option>
        </select>
        <button type="submit">Filter</button>
    </form>
</div>

<div class="pin_container">
    @foreach($posts as $key => $post)
        <div class="card card_medium">
            <a href='{{ url("post/details/$post->id") }}'><img src="{{ asset($post->image) }}" alt="Post Image"></a>
        </div>
    @endforeach
</div>
@endsection

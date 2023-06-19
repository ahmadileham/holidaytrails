@extends('h.master')

@section('title','A Post')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<div class="wrapper">

        <div class="photodiv">

            <div class="photo-location">
                <ion-icon class="locationicon" name="location-outline"></ion-icon>
                <location class="location">{{ $post->location }}</location>
            </div>
        
            <div class="image-container">
                <img class="image" src="{{ asset($post->image) }}" alt="Post's image">
            </div>
        
            <div class="Title">
                <p class="title">{{ $post->title }}</p>
            </div>

        </div>

        <div class="commentdiv">
            <div class="poster">

                <div class="profile-pic-container" href="{{route('ownprof')}}">
                    <img src="{{ asset('assets/images/greg.jpg') }}" alt="Profile Photo">
                </div>

                <div>
                    <span href="{{route('ownprof')}}" class="username">{{ $post->user->name }}</span>

                    <style>
                        .rating-stars {
                            color: gold; /* Change the color as desired */
                        }
                    </style>
                    <!-- Show average rating in star form -->
                    <div class="rating-stars">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $post->averageRating())
                                <i class="fas fa-star filled"></i>
                            @elseif ($i - 0.5 == $post->averageRating())
                                <i class="fas fa-star-half-alt filled"></i>
                            @else
                                <i class="far fa-star"></i>
                            @endif
                        @endfor
                    </div>

                    <!-- Show rating count -->
                    <p>({{ $post->ratingCount() }})</p>
                    
                </div>

                <style>
    .selected {
        color: yellow;
    }
</style>

<form action="{{ route('posts.rate', $post) }}" method="POST">
    @csrf
    <div class="rating">
        <span class="star" data-rating="1">&#9734;</span>
        <span class="star" data-rating="2">&#9734;</span>
        <span class="star" data-rating="3">&#9734;</span>
        <span class="star" data-rating="4">&#9734;</span>
        <span class="star" data-rating="5">&#9734;</span>
        <input type="hidden" name="rating" id="rating" value="">
    </div>
    <button style="border:none;"type="submit">Submit</button>
</form>

<script>
    // JavaScript code to handle the star rating interaction
    const stars = document.querySelectorAll('.star');
    const ratingInput = document.getElementById('rating');

    stars.forEach(star => {
        star.addEventListener('click', () => {
            const ratingValue = star.getAttribute('data-rating');
            ratingInput.value = ratingValue;

            // Update the star styling
            stars.forEach(s => {
                const starRating = s.getAttribute('data-rating');
                if (starRating <= ratingValue) {
                    s.innerHTML = '&#9733;';
                    s.classList.add('selected');
                } else {
                    s.innerHTML = '&#9734;';
                    s.classList.remove('selected');
                }
            });
        });
    });
</script>

            </div>

            <div class="desc">{{ $post->description }}</div>

            <div class="commentbox">
                    <div class="cmtholder">
                        @foreach($post->comments as $key => $comment)
                            <div class="cmt">
                                <div class="profile-pic-containercmt" href="{{route('othersprof')}}">
                                    <img src="{{ asset('assets/images/greg.jpg') }}" alt="Profile Photo">
                                </div>

                                <!-- <div>
                                    <span href="{{route('ownprof')}}" class="username" style="text-align:right;">Name</span>
                                </div> -->

                                <div>
                                    <p class="cmttext">{{ $comment->body }}</p>
                                </div>
                                
                            </div>

                        @endforeach
                    </div>

                    <hr>

                    <!-- comment form -->
                    <form id="comment-form" action = "{{route('comment.store', ['post' => $post->id])}}" class="comment-form" method="post">
                    @csrf
                        <div class="newcommentbox">
                            
                            <div>
                                <img src="{{ asset('assets/images/greg.jpg') }}" alt="Profile Photo" class="myprofile-pic-container">
                            </div>
                            
                            <div>
                                <input type="text" class="my-textfield" id="body" name="body" placeholder="Type your comment...">

                                <button type="submit" style="background-color: transparent; border:none;">
                                    <ion-icon class="send" name="send"></ion-icon>
                                </button>

                            </div>
                        </div>
                    </form>
            </div>

            
            
        </div>

    </div>
@endsection
@extends('h.master')

@section('title','A Post')

@section('content')
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
                    <div class="ratingdisplay">
                            <div class="ratings">
                                <ion-icon class="dummyrating" name="star"></ion-icon>
                                <ion-icon class="dummyrating" name="star"></ion-icon>
                                <ion-icon class="dummyrating" name="star"></ion-icon>
                                <ion-icon class="dummyrating" name="star"></ion-icon>
                                <ion-icon class="unrateddummy" name="star-outline"></ion-icon>
                            </div>

                            <div class="numberofratings">(562)</div>
                    </div>
                    
                </div>

                <div class="star_rating">
                    <button class="star">&#9734;</button>
                    <button class="star">&#9734;</button>
                    <button class="star">&#9734;</button>
                    <button class="star">&#9734;</button>
                    <button class="star">&#9734;</button>
                </div>

                <script>
                    const allStars = document.querySelectorAll('.star');

                        allStars.forEach((star, i) => {
                            star.onclick = function () {
                                let current_star_level = i + 1;

                                allStars.forEach((star, j) => {
                                    if (current_star_level >= j + 1) {
                                        star.innerHTML = '&#9733';
                                    } else{
                                        star.innerHTML = '&#9734';
                                    }


                                })
                            }
                        })
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
                        </div>
                        <!-- <input type="hidden" value="{{$post->id}}" name="post_id"> -->
                        <input type=">
                        <div>
                            <input type="text" class="my-textfield" id="body" name="body" placeholder="Type your comment...">
                        </div>
                    </form>
            </div>

            
            
        </div>

    </div>
@endsection
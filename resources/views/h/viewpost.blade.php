@extends('h.master')

@section('title','A Post')

@section('content')
<div class="wrapper">

        <div class="photodiv">

            <div class="photo-location">
                <ion-icon class="locationicon" name="location-outline"></ion-icon>
                <location class="location">MAURITIUS ISLAND</location>
            </div>
        
            <div class="image-container">
                <img class="image" src="{{ asset('assets/images/islandpic.jpg') }}" alt="gambor">
            </div>
        
            <div class="Title">
                <p class="title">The Underwater Waterfall phenomenon</p>
            </div>

        </div>

        <div class="commentdiv">
            <div class="poster">

                <div class="profile-pic-container" href="{{route('ownprof')}}">
                    <img src="{{ asset('assets/images/greg.jpg') }}" alt="Profile Photo">
                </div>

                <div>
                    <span href="{{route('ownprof')}}" class="username">John Doe James</span>
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

            <div class="desc">
                The spectacular mirage occurs when the sand and silt
                sediments on the ocean floor get sucked down under the
                influence of stronger underwater currents between the opening
                of the reefs. The scene resembles the flush of a waterfall
                cascading into a massive underwater pit.
            </div>
            
            <div class="commentbox">
                    <div class="cmtholder">
                        <div class="cmt">
                            <div class="profile-pic-containercmt" href="{{route('othersprof')}}">
                                <img src="{{ asset('assets/images/billie.jpg') }}" alt="Profile Photo">
                            </div>

                            <div>
                                <p class="cmttext">The spectacular mirage occurs when the sand and silt
                                sediments on the ocean floor get sucked down under the
                                influence of stronger underwater currents between the opening
                                of the reefs. The scene resembles the flush of a waterfall
                                cascading into a massive underwater pit.</p>
                            </div>

                        </div>

                        <div class="cmt">
                            <div class="profile-pic-containercmt" href="{{route('othersprof')}}">
                                <img src="{{ asset('assets/images/billie.jpg') }}" alt="Profile Photo">
                            </div>
                        
                            <div>
                                <p class="cmttext">The spectacular mirage occurs when the sand and silt
                                    sediments on the ocean floor get sucked down under the
                                    influence of stronger underwater currents between the opening
                                    of the reefs. The scene resembles the flush of a waterfall
                                    cascading into a massive underwater pit.</p>
                            </div>
                        
                        </div>

                        <div class="cmt">
                            <div class="profile-pic-containercmt" href="{{route('othersprof')}}">
                                <img src="{{ asset('assets/images/billie.jpg') }}" alt="Profile Photo">
                            </div>
                        
                            <div>
                                <p class="cmttext">The spectacular mirage occurs when the sand and silt
                                    sediments on the ocean floor get sucked down under the
                                    influence of stronger underwater currents between the opening
                                    of the reefs. The scene resembles the flush of a waterfall
                                    cascading into a massive underwater pit.</p>
                            </div>
                        
                        </div>
                    </div>

                    <hr>

                    <div class="newcommentbox">
                        <div class="mydp">
                            <div class="myprofile-pic-container">
                                <img src="{{ asset('assets/images/greg.jpg') }}" alt="Profile Photo">
                            </div>
                        </div>

                        <div>
                            <input type="text" class="my-textfield" placeholder="Type your comment...">
                        </div>

                        <ion-icon class="send" name="send"></ion-icon>

                    </div>
            </div>

            
            
        </div>

    </div>
@endsection
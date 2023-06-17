@extends('h.master')

@section('title','Edit Post')

@section('content')
<div class="container">
                <div class="uploadedimagescontainer">
                    <div class="uploadedimage">
                        <a href="{{asset('assets/images/airport.jpg') }}">
                            <img src="{{asset('assets/images/airport.jpg') }}">
                        </a>
                    </div>
                    <div class="uploadedimage">
                        <a href="{{asset('assets/images/kl.jpg') }}">
                            <img src="{{asset('assets/images/kl.jpg') }}">
                        </a>
                    </div>
                    <div class="uploadedimage">
                        <a href="{{asset('assets/images/asia2.jpg') }}">
                            <img src="{{asset('assets/images/asia2.jpg') }}">
                        </a>
                    </div>
                    <div class="uploadedimagemore">
                        <a href="{{asset('assets/images/france.JPG') }}">
                            <img src="{{asset('assets/images/france.JPG') }}">
                        </a>
                        <div id="morepostindicator">+3</div>
                    </div>
                </div>

                <form action="#">
                    <div class="postinput">
                      <a href="home.html"><ion-icon name="trash-outline"></ion-icon></a>
                        <div class="input-box">
                            <span class="details">Title</span>
                            <input type="text" placeholder="Add a title" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Description</span>
                            <textarea type="text" placeholder="Write a description" required></textarea>
                        </div>
                        <div class="input-box">
                            <span class="details">Location</span>
                            <input type="text" placeholder="Where was this taken?" required>
                        </div>
                        <div class="buttoncancel">
                            <input type="submit" value="Cancel Edit"/>
                        </div>
                        <div class="buttonsubmitedit">
                          <input type="submit" value="Publish Post"/>
                      </div>
                    </div>
                </form>
            </div>
@endsection
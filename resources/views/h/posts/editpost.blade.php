@extends('h.master')

@section('title','Edit Post')

@section('content')
            <div class="container">
                @if (session('message'))
                    <p>
                        {{ session('message') }}
                    </p>
                 @endif
                 <!-- <form class="createpost" method="POST" enctype="multipart/form-data" action="{{ url('store') }}">
                    @csrf
                    <div id="fileuploadbutton" class="input-box">
                        <input type="file" id="image" name="image" class="form-control"/>
                        <label for="file"><ion-icon name="cloud-upload-outline"></ion-icon><br>Drag and drop or click<br>to upload</label>
                    </div>
                </form> -->
                <form class="createpost" method="POST" enctype="multipart/form-data" action="{{ url('store') }}">
                    @csrf
                    <div class="displayimage">
                        <img class=postImage id="divImage" src="{{ asset($post->image) }}" alt="Post's Image"></img>
                    </div>
                    <div class="postinput">
                        <div class="input-box">
                            <span class="details">Title</span>
                            <input type="text" name="title" placeholder="Add a title" value="{{ $post->title }}" required></input>
                        </div>
                        <div class="input-box">
                            <span class="details">Description</span>
                            <textarea type="text" name="description" placeholder="Write a description" required>{{ $post->description }}</textarea>
                        </div>
                        <div class="input-box">
                            <span class="details">Location</span>
                            <input type="text" name="location" placeholder="Where was this taken?" value="{{ $post->location }}" required>
                        </div>
                        <a href="home.html"><ion-icon name="trash-outline"></ion-icon></a>
                        <div class="buttoncancel">
                            <input type="submit" value="Cancel Edit"/>
                        </div>
                        <div class="buttonsubmitedit">
                          <input type="submit" value="Publish Post"/>
                      </div>
                    </div>
                </form>
            </div>
            <script type="text/javascript">
                function getImagePreview(event){
                    var image = URL.createObjectURL(event.target.files[0]);
                    var imagediv = document.getElementById('divImage');
                    var newimg = document.createElement('img');
                    newimg.src = image;
                    imagediv.appendChild;
                };
            </script>
            <!-- <script>
                var loadFile = function(event){
                    var output = document.getElementByID('theImage');
                    output.src = URL.createObjectURL(event.target.files[0]);
                };
            </script> -->
@endsection
@extends('h.master')
@section('title','Add post')

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
                        <img class="showImage" id="divImage">
                        </img>
                        <div class="input-box" id="upbutton">
                            <input class="form-control" name="image" type="file" id="image">
                        </div>
                    </div>
                    <div class="postinput">
                        <div class="input-box">
                            <span class="details">Title</span>
                            <input type="text" name="title" placeholder="Add a title" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Description</span>
                            <textarea type="text" name="description" placeholder="Write a description" required></textarea>
                        </div>
                        <div class="input-box">
                            <span class="details">Location</span>
                            <input type="text" name="location" placeholder="Where was this taken?" required>
                        </div>
                        <div class="buttonsubmit">
                          <input type="submit" value="Publish Post"/>
                        </div>
                    </div>
                </form>
            </div>
            <!-- <script type="text/javascript">
                $(document).ready(function(){
                    $('#image').change(function(e){
                        var reader = new FileReader();
                        reader.onload = function(e){
                            $('#divImage').attr('src',e.target.result);
                        }
                        reader.readAsDataURL(e.target.files['0']);
                    });
                });
            </script> -->
            <!-- <script>
                var loadFile = function(event){
                    var output = document.getElementByID('theImage');
                    output.src = URL.createObjectURL(event.target.files[0]);
                };
            </script> -->
@endsection
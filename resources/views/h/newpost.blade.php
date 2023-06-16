@extends('h.master')
@section('title','Add post')

@section('content')
            <div class="container">
                <div id="fileuploadbutton">
                    <input type="file" id="file"/>
                    <label for="file"><ion-icon name="cloud-upload-outline"></ion-icon><br>Drag and drop or click<br>to upload</label>
                </div>

                <form class="createpost" action="#">
                    <div class="postinput">
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
                        <div class="buttonsubmit">
                          <input type="submit" value="Publish Post"/>
                      </div>
                    </div>
                </form>
            </div>
@endsection
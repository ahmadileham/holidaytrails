<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile Settings</title>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/update user profile.css')}}">
        <link rel="shortcut icon" type="x-icon" href="{{ asset('assets/images/icon.png') }}">
    </head>
        <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}"> -->
        <nav>
            <div>
              <ol>
                <li>
                  <a href="{{ route('home') }}"><ion-icon name="home-outline"></ion-icon></a>
                </li>
                <li>
                  <a href="{{ route('newpost') }}"><ion-icon name="add-outline"></ion-icon></a>
                </li>
              </ol>
            </div>
            <div>
              <input type="search" placeholder="Search" />
              <span class="fa fa-search"></span>
            </div>
            <ol>
              <li>
                    @if (!empty($profileData->photo))
                        <a href="{{ route('ownprof')}}"><img class="circle" src="{{ (!empty($profileData->photo)) ? url('upload/'.$profileData->photo) : url('upload/nophoto.png') }}" alt="Profile Picture" alt="Profile Picture"></a>
                    @else
                        <a href="{{ route('ownprof')}}"><ion-icon name="person-outline"></ion-icon></a>
                    @endif
              </li>
              <li>
                <a href="{{ route('analysis') }}"><ion-icon name="analytics-outline"></ion-icon></a>
              </li>
              <li>
                <a href="{{ route('user.logout') }}"
                  ><ion-icon name="log-out-outline"></ion-icon>
                </a>
              </li>
            </ol>
          </nav>
        <br><br><br>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <p style="margin-left: 400px; font-size: 25px;"><strong>Profile Details</strong></p>
    <div class="box">
      <br><br><br>

      <!-- <p class="faded" style="text-align: left;">Photo</p> -->
       <form method="POST" action="{{ route('profle.store') }}" enctype="multipart/form-data">
        @csrf
                <p class="faded" style="text-align: left; margin-top: 20px;">Name</p>
                <input type="text" id="username" name="name" value="{{ $profileData->name }}" style="margin-top: 20px; border-radius: 5px; width: 500px; border: 1px solid; padding: 10px">
                
                
                <p class="faded" style="text-align: left; margin-top: 20px;">About</p>
                <input type="text" id="about" name="about" value="{{ $profileData->about }}" rows="5" cols="63" style="border-radius: 10px; padding: 10px; margin-top: 20px; padding: 10px"></input>
                
                <p class="faded" style="text-align: left; margin-top: 20px;">Email*</p>
                <input type="email" id="email" name="email" value="{{ $profileData->email }}" style="margin-top: 20px; border-radius: 5px; width: 500px; border: 1px solid; padding: 10px" >
                
                <!-- <p class="faded" style="text-align: left; margin-top: 20px;">Password*</p>
                <input type="password" id="password" name="password" style="margin-top: 20px; border-radius: 5px; width: 500px; border: 1px solid black; padding: 10px"><br> -->
                <br><br><br>
                <div>
                    <label for="photo" style="margin-top: 20px">Photo</label><br><br>
                    <input type="file" id="image" name="photo"/>
                </div>

                <div>
                    <label for="photo" style="margin-top: 20px"></label><br><br>
                    <img id="showImage" class="circle1" src="{{ (!empty($profileData->photo)) ? url('upload/'.$profileData->photo) : url('upload/nophoto.png') }}" alt="Profile Picture"> 
                </div>
                    
                    <button type="submit" class="btn" style="margin-top: 20px;">Save Changes</button>
        </form>

                    <!-- <button type="submit" class="btn" style="margin-top: 20px;float: right;">Deactivate</button> -->

    </div>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
  </body>
</html>

@extends('h.master')

@section('title','My profile')

@section('content')
    <br><br><br>
    <div class="middle">
      <a href="{{ route('ownprof')}}"><img id="Profile" src="{{ (!empty($profileData->photo)) ? url('upload/'.$profileData->photo) : url('upload/nophoto.png') }}" alt="Profile Picture" alt="Profile Picture"></a>
      <p><strong>{{$profileData->name}}</strong><p>{{$profileData->about}}</p>
      <a href="{{route('profile.settings')}}" class="each"><ion-icon name="pencil-outline" class="o"></ion-icon></a>
    </div>
      
    <div class="pin_container">
      @foreach($posts as $key=>$post)
        <div class="card card_large">
          <a href='{{ url("post/details/$post->id") }}'>
              <img src="{{ asset($post->image) }}" alt="Post Image">
            <a href='{{ url("editpost/details/$post->id") }}'><ion-icon name="create" class="mak" style="color:white; position: absolute; bottom: 0; right: 0; margin-right: 5%; margin-bottom: 4%;"></ion-icon></a>
          </a>
        </div>
      @endforeach
    </div>

@endsection
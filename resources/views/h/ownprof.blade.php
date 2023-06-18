@extends('h.master')

@section('title','My profile')

@section('content')
    <br><br><br>
    <div class="middle">
      <a href="{{ route('ownprof')}}"><img id="Profile" src="{{ (!empty($profileData->photo)) ? url('upload/'.$profileData->photo) : url('upload/nophoto.png') }}" alt="Profile Picture" alt="Profile Picture"></a>
      <p><strong>{{$profileData->name}}</strong><p>{{$profileData->about}}</p>
      <a href="{{route('profile.settings')}}" class="each"><ion-icon name="pencil-outline" class="o"></ion-icon></a>
    </div>
      
      

    <div class="row">
      <div class="column post">
        <img src="{{ asset('assets/images/morocco.jpg') }}" alt="Morocco" style="width:100%">
        <a href="editpost.html"><ion-icon name="create" class="mak"></ion-icon></a>
      </div>
      <div class="column post">
        <img src="{{ asset('assets/images/japan.jpg') }}" alt="Japan" style="width:100%" >
        <a href="editpost.html"><ion-icon name="create" class="mak"></ion-icon></a>
      </div>
      <div class="column post">
        <img src="{{ asset('assets/images/indonesia.jpg') }}" alt="Indonesia" style="width:100%">
        <a href="editpost.html"><ion-icon name="create" class="mak"></ion-icon></a>
      </div>
      <div class="column post">
        <img src="{{ asset('assets/images/india.jpg') }}" alt="India" style="width:100%">
        <a href="editpost.html"><ion-icon name="create" class="mak"></ion-icon></a>
      </div>
      <div class="column post">
        <img src="{{ asset('assets/images/france.JPG') }}" alt="France" style="width:100%">
        <a href="editpost.html"><ion-icon name="create" class="mak"></ion-icon></a>
      </div>
    </div>

    <div class="row">
      <div class="column post">
        <img src="{{ asset('assets/images/china.jpg') }}" alt="China" style="width:100%" >
        <a href="editpost.html"><ion-icon name="create" class="mak"></ion-icon></a>
      </div>
      <div class="column post">
        <img src="{{ asset('assets/images/bc.jpg') }}" alt="Batu Caves" style="width:100%">
        <a href="editpost.html"><ion-icon name="create" class="mak"></ion-icon></a>
      </div>
      <div class="column post">
        <img src="{{ asset('assets/images/aus.jpg') }}" alt="Australia" style="width:100%">
        <a href="editpost.html"><ion-icon name="create" class="mak"></ion-icon></a>
      </div>
      <div class="column post">
        <img src="{{ asset('assets/images/louvre.jpg') }}" alt="The Louvre" style="width:100%">
        <a href="editpost.html"><ion-icon name="create" class="mak"></ion-icon></a>
      </div>
      <div class="column post">
        <img src="{{ asset('assets/images/korea.jpg') }}" alt="Korea" style="width:100%">
        <a href="editpost.html"><ion-icon name="create" class="mak"></ion-icon></a>
      </div>
    </div>
@endsection
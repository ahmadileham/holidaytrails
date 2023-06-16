@extends('h.master')

@section('title','your profile')

@section('content')

    <div class="middle">
      <img id="Profile" src="{{ asset('assets/images/billie.jpg') }}" alt="">
      <p>
        <strong>Hello I am Billie Eilish</strong>
        <p>billieeilish</p>
        <p id="follow">
            <strong>69M followers . 0 following</strong>
        </p>
    </p> 
      <a href="" class="each"><ion-icon name="person-add-outline" class="o"></ion-icon></a>
      
    <div class="row">
      <div class="column post">
        <img src="{{ asset('assets/images/japan.jpg') }}" alt="Japan" style="width:100%" >
      </div>
      <div class="column post">
        <img src="{{ asset('assets/images/korea.jpg') }}" alt="Korea" style="width:100%">
      </div>
      <div class="column post">
        <img src="{{ asset('assets/images/louvre.jpg') }}" alt="The Louvre" style="width:100%">
      </div>
      <div class="column post">
        <img src="{{ asset('assets/images/aus.jpg') }}" alt="Australia" style="width:100%">
      </div>
      <div class="column post">
        <img src="{{ asset('assets/images/bc.jpg') }}" alt="Batu Caves" style="width:100%">
      </div>
    </div>

    <div class="row">
      <div class="column post">
        <img src="{{ asset('assets/images/china.jpg') }}" alt="China" style="width:100%" >
      </div>
      <div class="column post">
        <img src="{{ asset('assets/images/france.JPG') }}" alt="France" style="width:100%">
      </div>
      <div class="column post">
        <img src="{{ asset('assets/images/india.jpg') }}" alt="India" style="width:100%">
      </div>
      <div class="column post">
        <img src="{{ asset('assets/images/indonesia.jpg') }}" alt="Indonesia" style="width:100%">
      </div>
      <div class="column post">
        <img src="{{ asset('assets/images/morocco.jpg') }}" alt="Morocco" style="width:100%">
      </div>
    </div>
@endsection
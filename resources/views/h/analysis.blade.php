@extends('h.master')
@section('title','Anal')

@section('content')
    <p id="engage"><strong>Engagement <br> <br><img src="images/greg.jpg" id="Profile"alt=""></strong></p>
    <p class="faded">@Greg</p> <br><br><br>
    <div class="charts">
      <div class="chart">
        <p class="faded">Statistics <br></p>
        <p> <strong>Profile Views</strong></p>
        <canvas id="myChart"></canvas></div>
      <div class="chart">
        <p class="faded">Community <br></p>
        <p> <strong>Rating Ratios</strong></p>
        <canvas id="myChart2"></canvas></div>
      </div>
    </div>
    <div class="charts">
      <div class="chart" style="height: 700px">
        <p class="faded">Based on accounts engaged <br></p>
        <p> <strong>Followers and Non-followers</strong></p>
        <p class="faded" id="total" style="font-size: 30px; ">Total Count</p>
        <p id="followers"><strong>178</strong></p>
        <canvas id="myChart3"></canvas>
      </div>
    </div>
    
    <script src="{{ asset('assets/my_chart.js') }}"></script>
@endsection
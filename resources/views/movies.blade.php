@extends('layouts.main')

@section('content')
  <div class="grid-container">
    @foreach ($movies as $movie)
      <div class="grid-item">
        <div class="container">    
          <div class="movie">       
            <div class="menu"><i class="material-icons"></i></div>
            <div class="movie-img" style="background-image: url({{ $movie["posterUrl"] }})"></div>
            <div class="text-movie-cont">
              <div class="mr-grid">
                <div class="col1">
                  <h1>{{ $movie["title"] }}</h1>
                  <ul class="movie-gen">
                    <li>{{ $movie["duration"] }}  /</li>
                    <li>{{ $movie["year"] }}  /</li>
                    <li>{{ $movie["genres"] }}</li>
                  </ul>
                </div>
              </div>
              <div class="grid-container-button">
                <div class="watch-btn"><h3><i class="material-icons">&#xE037;</i>SEE DETAILS</h3></div>
                <div class="action-btn"><i class="material-icons">&#xE161;</i></div>
                <div class="action-btn"><i class="material-icons">&#xE866;</i></div>
                <div class="action-btn"><i class="material-icons">&#xE80D;</i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
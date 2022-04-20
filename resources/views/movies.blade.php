@extends('layouts.main')

@section('content')
  @foreach ($movies as $movie)
      <div class="mb-20 d-flex flex-column mr-100">
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
                <div class="mr-grid summary-row">
                  <div class="col2">
                    <h5>SUMMARY</h5>
                  </div>
                  <div class="col2">
                    <ul class="movie-likes">
                      <li><i class="material-icons">&#xE813;</i>124</li>
                      <li><i class="material-icons">&#xE813;</i>3</li>
                    </ul>
                  </div>
                </div>
                <div class="mr-grid">
                  <div class="col1">
                    <p class="movie-description">{{ $movie["plot"] }}</p>
                  </div>
                </div>
                <div class="mr-grid actors-row">
                  <div class="col1">
                    <p class="movie-actors">{{ $movie["actors"] }}</p>
                  </div>
                </div>
                <div class="mr-grid action-row">
                  <div class="col2"><div class="watch-btn"><h3><i class="material-icons">&#xE037;</i>WATCH TRAILER</h3></div>
                  </div>
                  <div class="col6 action-btn"><i class="material-icons">&#xE161;</i>
                  </div>
                  <div class="col6 action-btn"><i class="material-icons">&#xE866;</i>
                  </div>
                  <div class="col6 action-btn"><i class="material-icons">&#xE80D;</i>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
  @endforeach

  
@endsection
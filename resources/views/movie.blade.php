@extends('layouts.main')

@section('content')
<div class="container">
  <h2> {{ $movie["title"] }} </h2>
  <div class="sub-movie-grid"> 
   <div>{{ $movie["duration"] }}</div>
   <div>.</div>
   <div>{{ $movie["year"] }}</div>
   <div>.</div>
   <div>{{ $movie["genres"] }}</div>
  </div>
  <div> 
   <img style="width: 100%; margin-top: 15px" src="{{asset('assets/images/video.png')}}" />
  </div>

  <div class="detail-movie-wrapper">
    <div>
      <div class="genre-grid">
      <button type="button" class="btn btn-outline-warning">Drama</button>
      <button type="button" class="btn btn-outline-warning">Comedy</button>
      <button type="button" class="btn btn-outline-warning">Crime</button>
      </div>
      <div class="plot-text"> 
      {{ $movie["plot"] }}
      </div>
      <hr>
      <div class="detail-movie-grid">
      <div class="label-detail">Duration</div>
      <div class="movie-detail">{{ $movie["duration"] }}</div>
      </div>
      <hr>
      <div class="detail-movie-grid">
      <div class="label-detail">Actor</div>
      <div class="movie-detail">{{ $movie["actors"] }}</div>
      </div>
      <hr>
      <div class="detail-movie-grid" style="margin-bottom: 30px">
      <div class="label-detail">Year</div>
      <div class="movie-detail">{{ $movie["year"] }}</div>
      </div>
    </div>
    <div>
      <button type="button" class="btn btn-warning watchlist"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="ipc-icon ipc-icon--add ipc-btn__icon ipc-button__icon--pre" id="iconContext-add" viewBox="0 0 24 24" fill="currentColor" role="presentation"><path d="M18 13h-5v5c0 .55-.45 1-1 1s-1-.45-1-1v-5H6c-.55 0-1-.45-1-1s.45-1 1-1h5V6c0-.55.45-1 1-1s1 .45 1 1v5h5c.55 0 1 .45 1 1s-.45 1-1 1z"></path></svg> Add to watchlist</button>
    </div>
  </div>
 </div>
@endsection
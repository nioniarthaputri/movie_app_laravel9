@extends('layouts.main')

@section('content')
 <div class="location" id="home">
   <h1 id="home">Popular on Netflix</h1>
   <div class="box">
    @foreach($movies as $movie)
      <a href=""><img src={{$movie["posterUrl"]}} alt=""></a>
    @endforeach      
   </div>
 </div>


  <h1 id="myList">Trending Now</h1>
  <div class="box">
    @foreach($trending as $t)
      <a href=""><img src={{$t["posterUrl"]}} alt=""></a>
    @endforeach          
  </div>

  <h1 id="tvShows">TV Shows</h1>
  <div class="box">
    @foreach($tvShows as $tvShow)
      <a href=""><img src={{$tvShow["posterUrl"]}} alt=""></a>
    @endforeach             
  </div>


  <h1 id="movies">Blockbuster Action & Adventure</h1>
  <div class="box">
    @foreach($blockbusters as $b)
      <a href=""><img src={{$b["posterUrl"]}} alt=""></a>
    @endforeach         
  </div>

  <h1 id="originals">Netflix Originals</h1>
  <div class="box">
    @foreach($netflixOriginals as $o)
      <a href=""><img src={{$o["posterUrl"]}} alt=""></a>
    @endforeach               
  </div>
@endsection


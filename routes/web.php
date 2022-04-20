<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'description' => 'Ini adalah Home Page'
    ]);
});

Route::get('/movies', function () {
    $list_movies = [
      [
        "id" => 1,
        "title" => "Beetlejuice",
        "year" => "1988",
        "duration" => "92min",
        "genres" => "Comedy, Fantasy",
        "actors" => "Alec Baldwin, Geena Davis, Annie McEnroe, Maurice Page",
        "plot" => "A couple of recently deceased ghosts contract the services of a \"bio-exorcist\" in order to remove the obnoxious new owners of their house.",
        "posterUrl" =>"https://i.ibb.co/FDGqCmM/papers-co-ag74-interstellar-wide-space-film-movie-art-33-iphone6-wallpaper.jpg"
      ],
      [
        "id" => 2,
        "title" => "The Cotton Club",
        "year" => "1984",
        "duration" => "127min",
        "genres" => "Crime, Drama, Music",
        "actors" => "Richard Gere, Gregory Hines, Diane Lane, Lonette McKee",
        "plot" => "The Cotton Club was a famous night club in Harlem. The story follows the people that visited the club, those that ran it, and is peppered with the Jazz music that made it so famous.",
        "posterUrl" => "https://i.ibb.co/FDGqCmM/papers-co-ag74-interstellar-wide-space-film-movie-art-33-iphone6-wallpaper.jpg"
      ],
      [
        "id" => 3,
        "title" => "The Shawshank Redemption",
        "year" => "1994",
        "duration" => "142min",
        "genres" => "Crime, Drama",
        "actors" => "Tim Robbins, Morgan Freeman, Bob Gunton, William Sadler",
        "plot" => "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
        "posterUrl" => "https://i.ibb.co/FDGqCmM/papers-co-ag74-interstellar-wide-space-film-movie-art-33-iphone6-wallpaper.jpg"
      ],
    ];
    return view('movies', [
        'title' => 'Movies',
        'movies' => $list_movies
    ]);
});


<?php

use App\Models\Movies;
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
        'movies' => Movies::all(),
        'trending' =>  Movies::allTrending(),
        'tvShows' =>  Movies::allTvShows(),
        'blockbusters' =>  Movies::allBlockbusters(),
        'netflixOriginals' =>  Movies::allNetflixOriginals()
    ]);
});

Route::get('/movies', function () {
    return view('movies', [
        'title' => 'Movies',
        'movies' => Movies::all()
    ]);
});

Route::get('/movies/{slug}', function ($slug) {
    return view('movie', [
        'title' => 'Detail Movie',
        'movie' => Movies::find($slug)
    ]);
});


<?php
 
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class MovieController extends Controller
{
  
    public function IndexHot()
    {
        $key = config('app.movieapi');
        $href = config('app.movieapihref');
        $collection = Http::get("$href/popular?api_key=$key&language=en-US&page=1%22") -> json();
        return view("pages.HotMovies", ['collection' => $collection['results']]);
    }
    public function IndexUpComing()
    {
        $key = config('app.movieapi');
        $href = config('app.movieapihref');
        $collection = Http::get("$href/upcoming?api_key=21f9ad3cc0b8830d984a057a3fc05fb8&language=en-US&page=1%22") -> json();
        return view("pages.UpComing", ['collection' => $collection['results']]);
    }
    public function IndexTopRated(){
        $key = config('app.movieapi');
        $href = config('app.movieapihref');
        $collection = Http::get("$href/top_rated?api_key=21f9ad3cc0b8830d984a057a3fc05fb8&language=en-US&page=1")-> json();
        return view("pages.toprated", ['collection' => $collection['results']]);
    }
    public function show($id){
        $key = config('app.movieapi');
        $href = config('app.movieapihref');
        $collection = Http::get("$href/$id?api_key=21f9ad3cc0b8830d984a057a3fc05fb8&language=en-US&page=1%22") -> json();
        $similar = Http::get("$href/$id/similar?api_key=21f9ad3cc0b8830d984a057a3fc05fb8&language=en-US&page=1") -> json();
        return view("pages.show", ['collection' => $collection], ['similar' => $similar['results']]);
    }
    public function Index(){
        $key = config('app.movieapi');
        $href = config('app.movieapihref');
        $hotmovies = Http::get("$href/popular?api_key=$key&language=en-US&page=1%22") -> json();
        $upcomingmovies = Http::get("$href/upcoming?api_key=$key&language=en-US&page=1%22") -> json();
        $topratedmovies = Http::get("$href/top_rated?api_key=$key&language=en-US&page=1") -> json();
        return view("pages.welcome", ['hotmovies' => $hotmovies['results']], ['upcomingmovies' => $upcomingmovies['results']]);
    }
}

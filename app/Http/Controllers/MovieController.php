<?php
 
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class MovieController extends Controller
{
    public function IndexHot()
    {
        $collection = Http::get("https://api.themoviedb.org/3/movie/popular?api_key=21f9ad3cc0b8830d984a057a3fc05fb8&language=en-US&page=1%22") -> json();
        return view("pages.HotMovies", ['collection' => $collection['results']]);
    }
    public function IndexUpComing()
    {
        $collection = Http::get("https://api.themoviedb.org/3/movie/upcoming?api_key=21f9ad3cc0b8830d984a057a3fc05fb8&language=en-US&page=1%22") -> json();
        return view("pages.UpComing", ['collection' => $collection['results']]);
    }
    public function IndexTopRated(){
        $collection = Http::get("https://api.themoviedb.org/3/movie/top_rated?api_key=21f9ad3cc0b8830d984a057a3fc05fb8&language=en-US&page=1")-> json();
        return view("pages.toprated", ['collection' => $collection['results']]);
    }
    public function show($id){
        $collection = Http::get("https://api.themoviedb.org/3/movie/$id?api_key=21f9ad3cc0b8830d984a057a3fc05fb8&language=en-US&page=1%22") -> json();
        $similar = Http::get("https://api.themoviedb.org/3/movie/$id/similar?api_key=21f9ad3cc0b8830d984a057a3fc05fb8&language=en-US&page=1") -> json();
        return view("pages.show", ['collection' => $collection], ['similar' => $similar['results']]);
    }
    public function Index(){
        $hotmovies = Http::get("https://api.themoviedb.org/3/movie/popular?api_key=21f9ad3cc0b8830d984a057a3fc05fb8&language=en-US&page=1%22") -> json();
        $upcomingmovies = Http::get("https://api.themoviedb.org/3/movie/upcoming?api_key=21f9ad3cc0b8830d984a057a3fc05fb8&language=en-US&page=1%22") -> json();
        $topratedmovies = Http::get("https://api.themoviedb.org/3/movie/top_rated?api_key=21f9ad3cc0b8830d984a057a3fc05fb8&language=en-US&page=1") -> json();
        return view("pages.welcome", ['hotmovies' => $hotmovies['results']], ['upcomingmovies' => $upcomingmovies['results']]);
    }
}

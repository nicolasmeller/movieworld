
@extends('layout')
@section('title', 'New Movies')


@section('content')
<div class="container page"> 
    <h1>Trending Movies</h1>
    <h1> </h1>
    <div class="d-flex align-content-start flex-wrap movie-list">
        @foreach ($collection as $item)
        <a href="show={{$item['id']}}">
            <div class="p-2 movie-item">
                <p>
                    {{$item['original_title']}}
                </p>
                <img src="https://image.tmdb.org/t/p/w500/{{$item['poster_path']}}" alt="" srcset="">
            </div>
        </a>
        @endforeach
    </div>
    <center>
        <div class="row">
            <div class="col">
                <a href="/HotMovies=<?php echo $pagenumber-1; ?>" rel="noopener noreferrer">Back</a>
            </div>
            <div class="col">
                <a href="/HotMovies=<?php echo $pagenumber+1; ?>" rel="noopener noreferrer">Next</a>
            </div>
        </div>
    </center>
    </div>
    @stop
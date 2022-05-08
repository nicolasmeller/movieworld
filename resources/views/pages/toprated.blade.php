@extends('layout')
@section('title', 'Top Rated')


@section('content')
<div class="container page"> 
    <h1>Top Rated</h1>
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
    </div>
    @stop
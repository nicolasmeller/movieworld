
@extends('layout')

@section('title', 'Welcome')


@section('content')
@include('components.slider')
    <div class="container">
        <br>
        <h2>Trending movies</h2>
        <div class="scroll-h">
            @foreach ($hotmovies as $item)
             <a href="show={{$item['id']}}">
              <img src="https://image.tmdb.org/t/p/w500/{{$item['poster_path']}}" alt="">
             </a>               
            @endforeach
        </div>
        <br>
        <h2>Up coming movies</h2>
        <div class="scroll-h">
            @foreach ($upcomingmovies as $item)
             <a href="show={{$item['id']}}">
              <img src="https://image.tmdb.org/t/p/w500/{{$item['poster_path']}}" alt="">
             </a>               
            @endforeach
        </div>
        <br>

    
    </div>
@stop
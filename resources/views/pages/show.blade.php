@extends('layout')
@section('title', 'Show more')


@section('content')
<div class="container page show-page"> 
    <div class="movie-info">
        <div class="row">
             <div class="col-md-5 col-sm-12">
                <div class="movie-info-img">
                    <img src="https://image.tmdb.org/t/p/w500/{{$collection['poster_path']}}" alt="" srcset="">
                </div>

             </div>
             <div class="col-md-7 col-sm-12">
                <h1>{{$collection['title']}} </h1>
                <h4>{{$collection['tagline']}}</h4>
                <p>Release: {{$collection['release_date']}}</p>
                <p>{{$collection['overview']}}</p>
            </div>
        </div>
    </div>
    <div class="similar">
         <h2>Similar</h2>
       


         <div class="scroll-h">
    
            @foreach ($similar as $item)



            <a href="show={{$item['id']}}">
            <img src="https://image.tmdb.org/t/p/w500/{{$item['poster_path']}}" alt="">
            </a>
    
                            
            @endforeach
        </div>

</div>



@stop
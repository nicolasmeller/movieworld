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
</div>


         <section class="product">
            <h2 class="product-category">Similar movies</h2>
            <button class="pre-btn"><img src="" alt=""><</button>
            <button class="nxt-btn"><img src="" alt="">></button>
            <div class="product-container">
                @foreach ($similar as $item)
                <div class="product-card">
                    <a href="show={{$item['id']}}">
                    <div class="product-image">
                        <img src="https://image.tmdb.org/t/p/w500/{{$item['poster_path']}}" class="product-thumb" alt="">
                    </div>
                </a>               
                </div>
     
              
               @endforeach
          
            </div>
        </section>





@stop
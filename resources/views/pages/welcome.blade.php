
@extends('layout')

@section('title', 'Welcome')


@section('content')
@include('components.slider')
<br />

        <section class="product">
            <h2 class="product-category">Trending movies</h2>
            <button class="pre-btn"><img src="" alt=""><</button>
            <button class="nxt-btn"><img src="" alt="">></button>
            <div class="product-container">
                @foreach ($hotmovies as $item)
                <div class="product-card">
                    <a href="show={{$item['id']}}">
                    <div class="product-image">
                        <img src="https://image.tmdb.org/t/p/w500/{{$item['poster_path']}}" class="product-thumb" alt="">
                    </div>
                </a>               
                    <div class="product-info">
                      
                    </div>
                </div>
     
              
               @endforeach
          
            </div>
        </section>
        <section class="product">
            <h2 class="product-category">Up coming movies</h2>
            <button class="pre-btn"><img src="" alt=""><</button>
            <button class="nxt-btn"><img src="" alt="">></button>
            <div class="product-container">
                @foreach ($upcomingmovies as $item)
                <a href="show={{$item['id']}}">
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://image.tmdb.org/t/p/w500/{{$item['poster_path']}}" class="product-thumb" alt="">
                    </div>
                    <div class="product-info">
                      
                    </div>
                </div>
     
              
                </a>               
               @endforeach
          
            </div>
        </section>
    </div>

   
@stop
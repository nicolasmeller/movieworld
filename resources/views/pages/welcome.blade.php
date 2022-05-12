
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

        <section class="product">
            <h2 class="product-category">best selling</h2>
            <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
            <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
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

    <script>
        const productContainers = [...document.querySelectorAll('.product-container')];
        const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
        const preBtn = [...document.querySelectorAll('.pre-btn')];

        productContainers.forEach((item, i) => {
            let containerDimensions = item.getBoundingClientRect();
            let containerWidth = containerDimensions.width;

            nxtBtn[i].addEventListener('click', () => {
                item.scrollLeft += containerWidth;
            })

            preBtn[i].addEventListener('click', () => {
                item.scrollLeft -= containerWidth;
            })
        })      
    </script>
@stop

@extends('layout')
@section('title', 'UpComing')


@section('content')
<div class="container page"> 
    <h1>Up coming movies</h1>
    <div class="d-flex align-content-start flex-wrap movie-list">
        @foreach ($collection as $item)
      
            <div class="movie-item">
                <a href="show={{$item['id']}}">
                <p>
                    {{$item['original_title']}}
                </p>
                <img src="https://image.tmdb.org/t/p/w500/{{$item['poster_path']}}" alt="" srcset="">
            </a>
            </div>
      
            
        @endforeach
    </div>

<center>
    <div class="row">
        <div class="col">
            <a class="pagination-button" href="/UpComing=<?php $pagezerochecker = (int)$pagenumber-1;if($pagezerochecker < 1){echo $pagenumber = 1;}else{echo (int)$pagenumber-1;}?>" rel="noopener noreferrer">
              
                  Back
              
            </a>
        </div>
            <div class="col">
            <a class="pagination-button" href="/UpComing=<?php echo (int)$pagenumber+1; ?>" rel="noopener noreferrer">
              
                  Next
          
            </a>
        </div>
        </div>
    </div>
    </center>

@stop
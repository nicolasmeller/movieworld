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
    <center>
        <div class="row">
            <div class="col">
                <a href="/toprated=<?php $pagezerochecker = (int)$pagenumber-1;if($pagezerochecker < 1){echo $pagenumber = 1;}else{echo (int)$pagenumber-1;}?>" rel="noopener noreferrer">
                    <div class="pagination-button">
                        <p>Back</p>
                    </div>
                </a>
            </div>
                <div class="col">
                <a href="/toprated=<?php echo (int)$pagenumber+1; ?>" rel="noopener noreferrer">
                    <div class="pagination-button">
                        <p>Next</p>
                    </div>
                </a>
            </div>
            </div>
        </div>
    </center>



    </div>
    @stop
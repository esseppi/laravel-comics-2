@extends('template/main')
@section('css', './css/app.css')
@section('title', 'Comics')
@section('content')
<main class="mainAlbum">
    <div class="hero">
        <img src="./images/jumbotron.jpg" alt="" srcset="">
        <div class="container">
            <div class="heroAlbum">            
                <img src="{{$thumb}}" alt="">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="mainContent">
            <h2>{{$title}}</h2>
            <div class="buttons">
                <div class="firstB">
                    <div>
                        <span>
                            U.s. Price :
                        </span>
                        {{$price}}
                    </div>
                    <span>
                        AVAILABLE
                    </span>
                </div>
                <div class="secondB">
                    <p>
                        CHECK AVAILABLITY
                    </p>
                </div>
            </div>
            <div class="albumInfo">
                {{$description}}
            </div>
        </div>
        <div class="advProduct">
            <span>ADVERTISING</span>
            <img src="./images/bho.jpg" alt="">
        </div>
    </div>
</main>
@endsection
    

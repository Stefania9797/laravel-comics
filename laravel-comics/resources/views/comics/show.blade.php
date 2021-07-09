@extends('layout.app')

@section('title', 'Comics')

@section('content')
<div class="divider"></div>
<div class="small-container">
    <div class="top-content">
        <div class="left-content">
            <div class="comic-cover">
                <img src="{{$comic['thumb']}}" alt="">
            </div>
            <!-- titolo fumetto -->
            <div class="title">
                <h1>{{$comic['title']}}</h1>
            </div>
            <!-- info disponibilità e prezzo -->
            <div class="green-info">
                <div class="d-flex">
                    <!-- prezzo -->
                    <div class="price-info">
                        <p><span>U.S. Price</span> {{$comic['price']}}</p>
                    </div>
                    <div class="available-info">
                        <h6>AVAILABLE</h6>
                    </div>
                </div>
                <!-- controllo disponibilità -->
                <div class="availabilty">
                    <p>Check availability</p>
                </div>
            </div>
            <div class="description">
                <p>{{$comic['description']}}</p>
            </div>
        </div>
        <div class="right-content">
            <!-- pubblicità -->
            <img src="{{asset('images/spot.jpg')}}" alt="">
        </div>
    </div>
    <div class="bottom-info">
        <!-- talent info -->
        <div class="talent">
            <h2>talent</h2>
            <!-- art by -->
            <div class="art-by">
                <h5>art by</h5>
                <!-- artists -->
                <span>
                     @foreach($comic['artists'] as $artist)
                        <a href="#">{{$artist}}</a>
                    @endforeach
                </span>
            </div> 
            <!-- written by -->
            <div class="written-by">
                <h5>written by</h5>
                <!-- writers -->
                <span>
                     @foreach($comic['writers'] as $writer)
                        <a href="#">{{$writer}}</a>
                    @endforeach
                </span>
            </div>   
        </div>
        <!-- specs info -->
        <div class="specs">
            <h2>specs</h2>
            <div class="series">
                <h5>series:</h5>
                <span>{{$comic['series']}}</span>
            </div>
            <div class="us-price">
                <h5>U.S. Price:</h5>
                <span>{{$comic['price']}}</span>
            </div>
            <div class="on-sale">
                <h5>On-sale date:</h5>
                <span>{{$comic['sale_date']}}</span>
            </div>
        </div>
    </div>
</div>
@endsection
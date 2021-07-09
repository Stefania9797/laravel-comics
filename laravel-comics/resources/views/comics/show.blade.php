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
                        <p><span>U.S. Price:</span> {{$comic['price']}}</p>
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
            <div class="adv">
                <h4>Advertisment</h4>
                <img src="{{asset('images/spot.jpg')}}" alt="">
            </div>
        </div>
    </div>
</div>
    <div class="bottom-info">
        <div class="small-container">
            <!-- talent info -->
            <div class="talent">
                <h2>Talent</h2>
                <!-- art by -->
                <div class="art-by">
                    <div class="art-by-title">
                        <h5>art by</h5>
                    </div>
                    <!-- artists -->
                    <div class="artists">
                        <span>
                            @foreach($comic['artists'] as $artist)
                            <a href="#">{{$artist}}</a>
                            @if(!$loop->last)
                            ,
                            @endif
                            @endforeach
                        </span>
                    </div>
                </div> 
                <!-- written by -->
                <div class="written-by">
                    <div class="written-by-title">
                        <h5>written by</h5>
                    </div>
                    <!-- writers -->
                    <div class="writers">
                        <span>
                            @foreach($comic['writers'] as $writer)
                            <a href="#">{{$writer}}</a>
                            @if(!$loop->last)
                            ,
                            @endif
                            @endforeach
                        </span>
                    </div>
                </div>   
            </div>
            <!-- specs info -->
            <div class="specs">
                <h2>Specs</h2>
                <div class="series">
                    <div class="series-title">
                        <h5>series:</h5>
                    </div>
                    <div class="series-info">
                        <a href="">{{$comic['series']}}</a>
                    </div>
                </div>
                <div class="us-price">
                    <div class="us-price-title">
                        <h5>U.S. Price:</h5>
                    </div>
                    <div class="us-price-info">
                        <span>{{$comic['price']}}</span>
                    </div>
                </div>
                <div class="on-sale">
                    <div class="onsale-title">
                        <h5>On-sale date:</h5>
                    </div>
                    <div class="onsale-info">
                        <span>{{$comic['sale_date']}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
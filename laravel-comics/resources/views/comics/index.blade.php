@extends('layout.app')

@section('title', 'Comics')

@section('content')
<div class="container">
    <h3>Current series</h3>
    <div class="comics">
        @foreach ($comics as $index=> $comic)
        <div class="comic">
            <a href="{{route('comic' , ['id'=> $index])}}">
                <div class="cover" style="background-image: url('{{$comic['thumb']}}');"></div>
                <h6>{{$comic["series"]}}</h6>
            </a>
        </div>
        @endforeach
        <div class="load-more">
            <a href="">load more</a>
        </div>
    </div>
</div>
<div class="info">
    <div class="container">
        <div class="info-container">
            <div class="info-logo">
            <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
            </div>
            <div class="info-text">
            <h5>Digital comics</h5>
            </div>
        </div>
        <div class="info-container">
            <div class="info-logo">
            <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
            </div>
            <div class="info-text">
            <h5>DC Merchandise</h5>
            </div>
        </div>
        <div class="info-container">
            <div class="info-logo">
            <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
            </div>
            <div class="info-text">
            <h5>Subscription</h5>
            </div>
        </div>
        <div class="info-container">
            <div class="info-logo">
            <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
            </div>
            <div class="info-text">
            <h5>comic shop locator</h5>
            </div>
        </div>
        <div class="info-container">
            <div class="info-logo">
            <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">
            </div>
            <div class="info-text">
            <h5>dc power visa</h5>
            </div>
        </div>
    </div>
</div>

@endsection

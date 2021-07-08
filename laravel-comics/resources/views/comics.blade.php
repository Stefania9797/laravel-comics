@extends('layout.app')

@section('title', 'Comics')

@section('content')
<div class="container">
    <h3>Current series</h3>
    <div class="comics">
        @foreach ($comics as $comic)
        <div class="comic">
            <div class="cover">
                <img src="{{$comic['thumb']}}" alt="">
            </div>
            <h6>{{$comic["series"]}}</h6>
        </div>
        @endforeach
    </div>
</div>

@endsection

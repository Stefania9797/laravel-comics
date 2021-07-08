@extends('layout.app')

@section('title', 'Comics')

@section('content')

<div class="comic">
    @foreach ($comics as $comic)
    
    @endforeach
</div>

@endsection

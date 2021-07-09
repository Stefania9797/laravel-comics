<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield("title")</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- header uguale per tutte le pagine -->
        <header>
            <div class="top-nav">
                <div class="container">
                    <div class="top-nav-links">
                        <a href="">Lorem, ipsum dolor.</a>
                        <a href="">Lorem, ipsum dolor.</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <nav class="main-nav">
                    <div class="logo">
                        <a href="{{route('comics')}}" id="header-logo">
                            <img src="{{asset('images/dc-logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="main-nav-links">
                        <a href="">Characters</a>
                        <a href="{{route('comics')}}" id="{{Route::currentRouteName() === 'comics' ? 'active' : ''}}">comics</a
                        ><a href="">movies</a>
                        <a href="">tv</a>
                        <a href="">games</a>
                        <a href="">collectibles</a>
                        <a href="">videos</a>
                        <a href="">fans</a>
                        <a href="">nws</a>
                        <a href="">shop</a>
                    </div>
                </nav>
            </div>
            <div class="jumbotron">
            </div>
        </header>
        <!-- contenuto di ogni pagina -->
        <main>
        @yield("content")
        </main>
        <!-- footer uguale per tutte le pagine -->
        <footer>
        
        </footer>
    </body>
</html>
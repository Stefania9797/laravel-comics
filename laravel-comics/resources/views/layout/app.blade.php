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
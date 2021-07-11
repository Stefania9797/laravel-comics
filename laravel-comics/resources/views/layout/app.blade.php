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
            <!-- footer-top -->
            <div class="footer-top">
                <div class="bg">
                    <img src="{{asset('images/dc-logo-bg.png')}}" alt="">
                </div>
                <div class="container">
                    <!-- colonne footer -->
                    <div class="footer-links">
                        <!-- colonna dc-comics -->
                        <div class="dc-comics_shop">
                            <div class="dc-comics">
                                <h3>Dc comics</h3>
                                <ul>
                                    <li>lorem</li>
                                    <li>lorem</li>
                                    <li>lorem</li>
                                    <li>lorem</li>
                                    <li>lorem</li>
                                    <li>lorem</li>
                                    <li>lorem</li>
                                </ul>
                            </div>
                            <!-- colonna shop -->
                            <div class="shop">
                                <h3>shop</h3>
                                <ul>
                                    <li>lorem</li>
                                    <li>lorem</li>
                                </ul>
                            </div>
                        </div>
                        <!-- colonna dc -->
                        <div class="dc">
                            <h3>Dc</h3>
                            <ul>
                                <li>lorem</li>
                                <li>lorem</li>
                                <li>lorem</li>
                                <li>lorem</li>
                                <li>lorem</li>
                                <li>lorem</li>
                                <li>lorem</li>
                                <li>lorem</li>
                                <li>lorem</li>
                                <li>lorem</li>
                                <li>lorem</li>
                            </ul>
                        </div>
                        <!-- colonna sites -->
                        <div class="sites">
                            <h3>sites</h3>
                            <ul>
                                <li>lorem</li>
                                <li>lorem</li>
                                <li>lorem</li>
                                <li>lorem</li>
                                <li>lorem</li>
                            </ul>
                        </div>
                    </div>
                    <div class="copyright">
                        <p>Lorem ipsum, dolor sit amet elit. <a href="">Distinctio similique</a> consectetur corrupti <a href="">Lorem ipsum dolor sit.</a> quaerat!</p>
                    </div>
                </div>
            </div>
            <!-- footer-bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="signup">
                        <button>Sign up now!</button>
                    </div>
                    <div class="social">
                        <div class="follow-us">
                            <h4>follow us</h4>
                        </div>
                        <div class="icons">
                            <img src="{{asset('images/footer-facebook.png')}}" alt="">
                            <img src="{{asset('images/footer-twitter.png')}}" alt="">
                            <img src="{{asset('images/footer-youtube.png')}}" alt="">
                            <img src="{{asset('images/footer-pinterest.png')}}" alt="">
                            <img src="{{asset('images/footer-periscope.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
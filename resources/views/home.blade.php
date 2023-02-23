<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | Home </title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">

    @vite('resources/js/app.js')


</head>

<body>
    <header>
        <div class="info-nav">
            <div class="container">
                <h6>DC POWER VISA</h6>
            </div>
        </div>
        <div class="container nav">
            <figure>
                <a href="{{ url('/') }}">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo DC">
                </a>
            </figure>
            <ul>
                <li><a href="{{ route('characters') }}">CHARACTERS</a></li>
                <li><a href="{{ route('comics') }}">COMICS</a></li>
                <li><a href="{{ route('movies') }}">MOVIES</a></li>
                <li><a href="{{ route('tv') }}">TV</a></li>
                <li><a href="{{ route('games') }}">GAMES</a></li>
                <li><a href="{{ route('collectibles') }}">COLLECTIBLES</a></li>
                <li><a href="{{ route('videos') }}">VIDEOS</a></li>
                <li><a href="{{ route('fans') }}">FANS</a></li>
                <li><a href="{{ route('news') }}">NEWS</a></li>
            </ul>
        </div>
        <div class="jumbotron">

        </div>
    </header>
    <main>
        <section id="home">
            <div class="container text-center my-4">
                <h1>Questa è la nostra Home</h1>
            </div>
        </section>
    </main>
    <footer>
        <section id="dc-comics-footer">
            <div class="container menu-footer">
                <div class="list">
                    <ul>
                        <h4>DC COMICS</h4>
                        <li>
                            <a href="">Characters</a>
                        </li>
                        <li>
                            <a href="">Comics</a>
                        </li>
                        <li>
                            <a href="">Movies</a>
                        </li>
                        <li>
                            <a href="">TV</a>
                        </li>
                        <li>
                            <a href="">Games</a>
                        </li>
                        <li>
                            <a href="">Videos</a>
                        </li>
                        <li>
                            <a href="">News</a>
                        </li>
                        <h4>TITLE</h4>
                        <li>
                            <a href="">SHOP</a>
                        </li>
                        <li>
                            <a href="">Shop DC</a>
                        </li>
                        <li>
                            <a href="">Shop DC Collectibles</a>
                        </li>
                    </ul>
                    <ul>
                        <h4>DC</h4>
                        <li>
                            <a href="">Terms Of Use</a>
                        </li>
                        <li>
                            <a href="">Privacy Policy (New)</a>
                        </li>
                        <li>
                            <a href="">Ad Choices</a>
                        </li>
                        <li>
                            <a href="">Advertising</a>
                        </li>
                        <li>
                            <a href="">Jobs</a>
                        </li>
                        <li>
                            <a href="">Subscriptions</a>
                        </li>
                        <li>
                            <a href="">Talen Workshops</a>
                        </li>
                        <li>
                            <a href="">CPSC Certificates</a>
                        </li>
                        <li>
                            <a href="">Ratings</a>
                        </li>
                        <li>
                            <a href="">Shop Helps</a>
                        </li>
                        <li>
                            <a href="">Contact Us</a>
                        </li>

                    </ul>
                    <ul>
                        <h4>SITES</h4>
                        <li>
                            <a href="">DC</a>
                        </li>
                        <li>
                            <a href="">MAD Magazine</a>
                        </li>
                        <li>
                            <a href="">DC Kids</a>
                        </li>
                        <li>
                            <a href="">DC Universe</a>
                        </li>
                        <li>
                            <a href="">DC Power Visa</a>
                        </li>

                    </ul>
                </div>
                <div class="logo">
                    <img src="{{ Vite::asset('resources/img/dc-logo_bg.png') }}" alt="">
                </div>
            </div>
        </section>
        <section id="sign-footer">

        </section>
    </footer>
</body>

</html>

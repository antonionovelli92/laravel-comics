<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | Comics </title>
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
                <h1>Tutti i tuoi fumetti</h1>
            </div>
        </section>
    </main>
</body>

</html>

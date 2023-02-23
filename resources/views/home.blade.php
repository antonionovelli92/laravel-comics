<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics | Home </title>
</head>
<body>
    <header>
        <figure>
            <a href="{{url('/')}}">
                <img src="{{asset('images/dc-logo.png')}}" alt="logo DC">
            </a>
        </figure>
        <ul>
            <li><a href="{{route('characters')}}">CHARACTERS</a></li>
            <li><a href="{{route('comics')}}">COMICS</a></li>
            <li><a href="{{route('movies')}}">MOVIES</a></li>
            <li><a href="{{route('tv')}}">TV</a></li>
            <li><a href="{{route('games')}}">GAMES</a></li>
            <li><a href="{{route('collectibles')}}">COLLECTIBLES</a></li>
            <li><a href="{{route('videos')}}">VIDEOS</a></li>
            <li><a href="{{route('fans')}}">FANS</a></li>
            <li><a href="{{route('news')}}">NEWS</a></li>
        </ul>
    </header>
</body>
</html>
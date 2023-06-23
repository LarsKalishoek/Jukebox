<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Songs - Index</title>
</head>
<body>
    @include('navbar')
    <h1>Dit is een totaal overzicht van alle Songs</h1>
    <ul>
    @foreach($songs as $song)
        <li>{{$song->name}} - {{$song->author}} | Released in {{$song->releasedate}} | Genre is {{$song->genre?->name}} |is found in playlist: @foreach($song->playlists as $playlist) {{$playlist->name}}; @endforeach <a href="{{route('song.destroy', ['song' => $song->id])}}">X</a></li>

    @endforeach
    </ul>

    <a href="{{route('song.create')}}">Create a song</a>
</body>
</html>

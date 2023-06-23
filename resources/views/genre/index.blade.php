<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('navbar')
    <h1>Dit is een totaal overzicht van alle Genres</h1>
    <ul>
    @foreach($genres as $genre)
        <li>{{$genre->name}} <a href="{{route('genre.destroy', ['genre' =>$genre->id])}}">X</a></li>
    @endforeach()
    </ul>
    <a href="{{route('genre.create')}}">Create a genre</a>
</body>
</html>
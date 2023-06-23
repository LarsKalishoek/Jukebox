<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Songs - Create</title>
</head>
<body>
    <h1>Add a Song</h1>
    <form method="POST" action="{{route('song.store')}}">
        @csrf
        <label>Vul een naam voor het liedje in</label>
        <input name="name" type="text">
        <br>
        <label>Vul een author voor het liedje in</label>
        <input name="author" type="text">
        <br>
        <label>Vul een genre voor het liedje in</label>
        <select name="genre">
        @foreach($genres as $genre)
            <option value="{{$genre->id}}">{{$genre->name}} </option>
        @endforeach
        </select>
        <br>
        <label>Vul een releasedate voor het liedje in</label>
        <input name="releasedate" type="date">
        <br>
        <label>Vul een duratie voor het liedje in</label>
        <input name="duration" type="number">
        <br>

        <input type="submit" value="Send me!">
    </form>
</body>
</html>

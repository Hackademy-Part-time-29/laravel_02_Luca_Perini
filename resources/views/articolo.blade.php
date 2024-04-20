<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selfwork190424</title>
</head>
<body>

    <ul>
        <li> <a href="{{route('homepage')}}">Home</a></li>
        <li> <a href="{{route('servizi')}}">Servizi</a></li>
        <li> <a href="{{route('articles')}}">Articoli</a></li>
        <li> <a href="{{route('chi-siamo')}}">Chi siamo</a></li>
    </ul>
    <h1>{{$article['title']}}</h1>
    <p>{{$article['description']}}</p>
</body>
</html>
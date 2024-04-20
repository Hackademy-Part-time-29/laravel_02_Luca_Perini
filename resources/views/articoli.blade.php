<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selfwork190424</title>
</head>
<body>
    @if(!empty($title))
    <h1>{{$title}}</h1>
    @endempty
    <ul>
        <li> <a href="/chi-siamo">Chi siamo</a></li>
        <li> <a href="/servizi">Servizi</a></li>
        <li> <a href="/">Home</a></li>
    </ul>
    @if(!@empty($description))
        <p>{{$description}}</p>
    @endempty
    @foreach ($articles as $article)
        <div>
            <h2>{{$article['title']}}</h2>
            <p>{{$article['description']}}</p>
            <a href="{{route('articolo',['id'=>$article['id']])}}">+Leggi di più</a>
            <br>
            <br>
        </div>
    @endforeach
    
</body>
</html>
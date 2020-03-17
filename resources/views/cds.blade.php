<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>Php Dischi</title>
</head>

<body>
    <div class="container">
        <header>
            <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
        </header>

        <select name="generi" id="generi">
            <option value="all">all</option>
            @foreach ($generi as $genere)
                <option value="{{$genere}}">{{$genere}}</option>
            @endforeach
        </select>

        <div class="cds-container">
            @foreach ($cds as $cd)
                <div class="cd">
                <a href="{{route('cds.show', ['slug' => $cd['slug']])}}"><img src="{{$cd['img']}}" alt="{{$cd['title']}}"></a>
                    <h3>{{$cd['title']}}</h3>
                    <small>{{$cd['author']}}</small>
                    <strong>{{$cd['year']}}</strong>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
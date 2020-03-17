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


        <div class="cds-container">
                <div class="cd">
               <img src="{{$cd['img']}}" alt="{{$cd['title']}}">
                    <h3>{{$cd['title']}}</h3>
                    <small>{{$cd['author']}}</small>
                    <strong>{{$cd['year']}}</strong>
                </div>
        </div>
    </div>
</body>

</html>
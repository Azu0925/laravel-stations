<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>movie</title>
</head>
<body>
        <ul>
            @foreach ($movies as $movie)
            <li>
                <h3>タイトル: {{ $movie->title }}</h3>
                <p><img src="{{ $movie->image_url }}" /></p>
            </li>
            @endforeach
        </ul>
</body>
</html>
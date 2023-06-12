<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>

<?php foreach ($posts as $post):  ?>
<article>
    <h1>
        <a href="/posts/{{ $post->slug }}"</a>
        {{ $post->title }}
    </h1>

    <p>
        <a href="/categories/{{$post->category->slug}}"> {{$post-> category -> name}}</a>
    </p>

    <div>
        {{ $post->excerpt }}
    </div>
</article>

<?php endforeach; ?>
</body>
</html>

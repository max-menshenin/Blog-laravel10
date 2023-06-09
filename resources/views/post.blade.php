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

<article>
    <h1> {{ $post->title }}  </h1>
    {{ $post->created_at }}

    <p>
        By <a href="/authors/{{ $post->author->username }}">{{$post->author->username}}</a> in <a href="/categories/{{$post->category->slug}}"> {{$post-> category -> name}}</a>
    </p>

    <div>
        {!!  $post-> body !!}
    </div>
</article>
<p>
    <a href="/">Go back</a>
</p>
</body>
</html>

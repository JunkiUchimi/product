<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h2>本文</h2>
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        <h3 class="price">
            {{ $post->price }}
        </h3>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
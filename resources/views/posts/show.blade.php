<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app() ->getLocale())}}">
        <head>
                <meta charset="utf-8">
                <title>Blog</title>
                <!--Fonts -->
                <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <body>
                <h1 class='title'>
                        {{ $post->title }}
                </h1>
                <div class='content'>
                        <div class='content_post'>
                                <h3>本文</h3>
                                <p class='body'>{{ $post->body }}</p>
                        </div>
                        <div class='footer'>
                            <!--ブログ投稿一覧画面に戻るためのリンクを用意する-->
                            <a href="/">ブログ投稿一覧に戻る</a>
                        </div>
                </div>
        </body>
</html>
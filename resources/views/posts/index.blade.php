<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app() ->getLocale())}}">
        <head>
                <meta charset="utf-8">
                <title>Blog</title>
                <!--Fonts -->
                <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <body>
                <h1>初めてのブログ作成</h1>
                <a href='/posts/create'>新規作成</a>
                <br>
                <div class='posts'>
                        <b>これまでのブログ一覧</b>
                        @foreach ($posts as $post)
                        <div class='post'>
                                <a href="/posts/{{ $post->id }}"><h2 class='title'>{{ $post->title }}</h2></a>
                                <p class='body'>{{ $post->body }}</p>
                                <button type="button" onclick="location.href='/posts/{{ $post->id }}/edit'">編集</button>
                        </div>
                        @endforeach
                </div>
                <div class='paginate'>
                        {{ $posts->links() }}
                </div>
        </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app() ->getLocale())}}">
        <head>
                <meta charset="utf-8">
                <title>Blog</title>
                <!--Fonts -->
                <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <x-app-layout>
                <x-slot name="header">
                    ブログの編集   
                </x-slot>
        <body>
            <h1>編集画面</h1>
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class ="title">
                    <h2>Title</h2>
                    <input type="text" name="post[title]" value="{{ $post->title }}"/>
                    <p class='title__error' style="color:red">{{ $errors->first('post.title') }}</p>
                </div>
                <div class="body">
                    <h2>Body</h2>
                    <textarea name="post[body]">{{ $post->body }}</textarea>
                    <p class='body__error' style="color:red">{{ $errors->first('post.body') }}</p>
                </div>
                <input type="submit" value="更新"/>
            </form>
            <div class='back'>
                <!--ブログ投稿一覧画面に戻るためのリンクを用意する-->
                <a href="/">ブログ投稿一覧に戻る</a>
            </div>
        </body>
        </x-app-layout>
</html>
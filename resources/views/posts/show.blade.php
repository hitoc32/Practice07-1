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
                    ブログ    
                </x-slot>
        <body>
                <h2>タイトル</h2>
                <h1 class='title'>
                        {{ $post->title }}
                </h1>
                <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                <div class='content'>
                        <div class='content_post'>
                                <h3>本文</h3>
                                <p class='body'>{{ $post->body }}</p>
                        </div>
                </div>
                <div class="edit">
                        <a href="/posts/{{ $post->id }}/edit">edit</a>
                </div>
                <div class='footer'>
                 <!--ブログ投稿一覧画面に戻るためのリンクを用意する-->
                    <a href="/">ブログ投稿一覧に戻る</a>
                </div>
        </body>
        </x-app-layout>
</html>
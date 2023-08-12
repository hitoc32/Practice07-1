<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app() ->getLocale())}}">
        <head>
                <meta charset="utf-8">
                <title>Blog</title>
                <!--Fonts -->
                <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <x-app-layout>
                <x-slot name="header">カテゴリー別一覧</x-slot>
        <body>
                <h1>初めてのブログ作成</h1>
                <a href='/posts/create'>新規作成はこちらから</a>
                <div class='posts'>
                        <h2>これまでのブログ一覧</h2>
                        @foreach ($posts as $post)
                        <div class='post'>
                                <a href="/posts/{{ $post->id }}"><h2 class='title'>{{ $post->title }}</h2></a>
                                <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                                <p class='body'>{{ $post->body }}</p>
                                <button type="button" onclick="location.href='/posts/{{ $post->id }}/edit'">編集</button>
                                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="deletePost({{ $post->id }})">ブログの削除</button>
                                </form>
                        </div>
                        @endforeach
                </div>
                <div class='paginate'>
                        {{ $posts->links() }}
                </div>
                <script>
                        function deletePost(id){
                                'use strict'
                                
                                if (confirm('削除すると復元できません。\n本当に削除しますか？')){
                                        document.getElementById(`form_${id}`).submit();
                                }
                        }
                </script>
        </body>
        </x-app-layout>
</html> 
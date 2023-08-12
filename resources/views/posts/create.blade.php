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
                    新規作成    
                </x-slot>
        <body>
            <h1>Blog Name</h1>
            <form action="/posts" method="POST">
                @csrf
                <div class ="title">
                    <h2>Title</h2>
                    <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                    <p class='title__error' style="color:red">{{ $errors->first('post.title') }}</p>
                </div>
                <div class="body">
                    <h2>Body</h2>
                    <textarea name="post[body]" placeholder="こちらに記入してください">{{ old('post.body') }}</textarea>
                    <p class='body__error' style="color:red">{{ $errors->first('post.body') }}</p>
                </div>
                <!-- これはforms内に入れないとDB接続が上手くいかない。-->
                <div class="category">
                <h2>Category</h2>
                <select name="post[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
                <input type="submit" value="保存"/>
            </form>
            <div class='back'>
                <!--ブログ投稿一覧画面に戻るためのリンクを用意する-->
                <a href="/">ブログ投稿一覧に戻る</a>
            </div>
        </body>
        </x-app-layout>
</html>
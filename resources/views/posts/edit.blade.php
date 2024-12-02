<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<x-app-layout>
    <x-slot name="header">
        HEADER
    </x-slot>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="post">
                @csrf
                @method('PUT')
                <div class="content__title">
                    <h2>タイトル</h2>
                    <input type="text" name="post[title]" value="{{ $post->title }}">
                </div>
                <div class="content__body">
                    <h2>本文</h2>
                    <input type="text" name="post[body]" value="{{ $post->body }}">
                </div>
                <input type="submit" value="保存">
            </form>
        </div>
    </body>
</x-app-layout>
</html>
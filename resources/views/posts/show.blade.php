<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<x-app-layout>
    <x-slot name="header">
        HEADER
    </x-slot>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        <div class="content">
            <div class="content_post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>
            </div>
        </div>
        <div class="edit"><a href="/posts/{{ $post->id }}/edit">edit</a></div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>
</html>
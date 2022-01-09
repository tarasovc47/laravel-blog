@extends('layouts.main')

@section('title')
    Статья {{ $article->title }}
@endsection

@section('content')
    <div class="container">
        Заголовок: {{ $article->title }} <br>
        Логотип: {{ $article->logo }} <br>
        Краткое описание: {{ $article->annotation }} <br>
        Текст: {{ $article->text }} <br>
        Автор: <a href="/authors/{{ \App\Models\Author::query()->where('id', '=', $article->author_id)->first()->slug }}">
            {{ \App\Models\Author::query()->where('id', '=', $article->author_id)->first()->name }}</a><br>
    </div>
@endsection

@extends('layouts.main')

@section('title')
    Статья {{ $article->title }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                Заголовок: {{ $article->title }} <br>
                Краткое описание: {{ $article->annotation }} <br>
                Текст: {{ $article->text }} <br>
                Автор: <a href="/authors/{{ \App\Models\Author::query()->where('id', '=', $article->author_id)->first()->slug }}">
                    {{ \App\Models\Author::query()->where('id', '=', $article->author_id)->first()->name }}</a><br>
            </div>
            <div class="col-md-4">
                <img width="200" src="{{ asset('images/logo/No-image.png') }}"> <br>
            </div>
        </div>
    </div>
@endsection

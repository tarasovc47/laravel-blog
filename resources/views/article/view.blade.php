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
                Автор: <a href="/authors/{{ $article->author->slug }}">{{ $article->author->name }}</a><br>
                Категории данной статьи:
                <ul>
                    @foreach($article->category as $category)
                        <li>{{$category->id}} <a href="/categories/{{$category->slug}}">{{$category->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <img width="200" src="{{ asset('images/logo/No-image.png') }}"> <br>
            </div>
        </div>
    </div>
@endsection

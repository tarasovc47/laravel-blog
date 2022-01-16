@extends('layouts.main')

@section('title')
    Статьи
@endsection

@section('articleSearch')
    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" action="{{route('articleSearch')}}" method="GET">
        <input type="search" class="form-control form-control-dark" name="search" placeholder="Поиск по статьям..." aria-label="Search">
    </form>
@endsection

@section('content')
    <div class="container">
    <h1>Статьи</h1>
    <table class="table">
        <thead>
        <td>Заголовок</td>
        <td>Краткое описание</td>
        <td>Текст</td>
        <td>Автор</td>
        </thead>
        @foreach($articles as $article)
            <tr>
                <td><a href="/articles/{{$article->slug}}">{{$article->title}}</a></td>
                <td>{{$article->annotation}}</td>
                <td>{{$article->text}}</td>
                <td><a href="/authors/{{$article->author->slug}}">{{$article->author->name}}</a></td>
            </tr>
        @endforeach
    </table>
    </div>
    {{ $articles->appends(request()->except('page'))->links() }}
@endsection

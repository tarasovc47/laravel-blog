@extends('layouts.main')

@section('title')
Автор {{ $author->name }}
@endsection

@section('authorSearch')
    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" action="{{route('authorSearch')}}" method="GET">
        <input type="search" class="form-control form-control-dark" name="search" placeholder="Поиск по авторам..." aria-label="Search">
    </form>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                Имя: {{ $author->name }} <br>
                День рождения: {{ $author->birthday }} <br>
                Биография: {{ $author->biography }} <br>
                Статьи этого автора:
                <ul>
                    @foreach($author->article as $article)
                        <li>{{$article->id }} <a href="/articles/{{$article->slug}}">{{$article->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <img width="200" src="{{ asset('images/avatar/no-avatar.png') }}"> <br>
            </div>
        </div>
    </div>
@endsection

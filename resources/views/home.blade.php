@extends('layouts.main')

@section('title')
    Домашняя
@endsection

@section('globalSearch')
    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" action="{{route('globalSearch')}}" method="GET">
        <input type="search" class="form-control form-control-dark" name="search" placeholder="Поиск ..." aria-label="Search">
    </form>
@endsection

@section('content')
    <div class="container">
        <h1>Домашняя страница</h1>
        @if( $articles ?? '' or $authors ?? '' or $categories ?? '' )
            <!-- вот эту группу таблиц можно оформить как-то циклом, с переменными -->
            <table class="table">
                <tr>
                    <th colspan="3">Найденные статьи</th>
                </tr>
                @foreach($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->text}}</td>
                    </tr>
                @endforeach
            </table>
            <table class="table">
                <tr>
                    <th colspan="3">Найденные авторы</th>
                </tr>
                @foreach($authors as $author)
                    <tr>
                        <td>{{$author->name}}</td>
                        <td>{{$author->birthday}}</td>
                        <td>{{$author->biography}}</td>
                    </tr>
                @endforeach
            </table>
            <table class="table">
                <tr>
                    <th colspan="3">Найденные категории</th>
                </tr>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->title}}</td>
                        <td>{{$category->description}}</td>
                    </tr>
                @endforeach
            </table>
        @elseif(empty($articles) and empty($authors) and empty($categories))
            Воспользуйтесь поиском или навигацией вверху страницы<br>
            Поиск на данной странице ищет по всем сущностям, поиск на страницах сущностей ищет по данной сущности
        @endif
    </div>
@endsection

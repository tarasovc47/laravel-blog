@extends('layouts.main')

@section('title')
    Категория {{ $category->title }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                Название: {{ $category->title }} <br>
                Описание: {{ $category->description }} <br>
                Статьи данной категории:
                <ul>
                    @foreach($category->article as $article)
                        <li>{{$article->id}} <a href="/articles/{{$article->slug}}"> {{$article->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <img width="200" src="{{ asset('images/logo/No-image.png') }}"> <br>
            </div>
        </div>
    </div>
@endsection

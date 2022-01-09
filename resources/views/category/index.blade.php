@extends('layouts.main')

@section('title')
    Категории
@endsection

@section('content')
    <h1>Категории</h1>
    <table class="table">
        <thead>
        <td>Название</td>
        <td>Описание</td>
        </thead>
        @foreach($categories as $category)
            <tr>
                <td><a href="/categories/{{$category->slug}}">{{$category->title}}</a></td>
                <td>{{$category->description}}</td>
            </tr>
        @endforeach
    </table>
    {{ $categories->links() }}
@endsection

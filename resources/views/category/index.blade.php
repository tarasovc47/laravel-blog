@extends('layouts.main')

@section('title')
    Категории
@endsection

@section('categorySearch')
    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" action="{{route('categorySearch')}}" method="GET">
        <input type="search" class="form-control form-control-dark" name="search" placeholder="Поиск по категориям..." aria-label="Search">
    </form>
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
    {{ $categories->appends(request()->except('page'))->links() }}
@endsection

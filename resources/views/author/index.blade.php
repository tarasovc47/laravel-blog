@extends('layouts.main')

@section('title')
    Авторы
@endsection

@section('authorSearch')
    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" action="{{route('authorSearch')}}" method="GET">
        <input type="search" class="form-control form-control-dark" name="search" placeholder="Поиск по авторам..." aria-label="Search">
    </form>
@endsection

@section('content')
    <h1>Авторы</h1>
    <table class="table">
        <thead>
        <td>Имя</td>
        <td>Дата рождения</td>
        <td>Биография</td>
        </thead>
        @if($authors)
            @foreach($authors as $author)
                <tr>
                    <td><a href="/authors/{{$author->slug}}">{{$author->name}}</a></td>
                    <td>{{$author->birthday}}</td>
                    <td>{{$author->biography}}</td>
                </tr>
            @endforeach
        </table>
        {{ $authors->links() }}
        @endif

@endsection

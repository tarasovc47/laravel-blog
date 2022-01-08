@extends('layouts.main')

@section('title')
    Авторы
@endsection

@section('content')
    <h1>Авторы</h1>
    <table class="table">
        <thead>
        <td>Имя</td>
        <td>Аватарка</td>
        <td>Дата рождения</td>
        <td>Биография</td>
        </thead>
    @foreach($authors as $author)
        <tr>
            <td><a href="/authors/{{$author->slug}}">{{$author->name}}</a></td>
            <td>{{$author->avatar}}</td>
            <td>{{$author->birthday}}</td>
            <td>{{$author->biography}}</td>
        </tr>
    @endforeach
    </table>
@endsection

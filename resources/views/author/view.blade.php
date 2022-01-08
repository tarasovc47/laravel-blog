@extends('layouts.main')

@section('title')
Автор {{ $author->name }}
@endsection

@section('content')
    <div class="container">
        Имя: {{ $author->name }} <br>
        Аватарка: {{ $author->avatar }} <br>
        День рождения: {{ $author->birthday }} <br>
        Биография: {{ $author->biography }} <br>
    </div>
@endsection

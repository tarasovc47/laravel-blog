@extends('layouts.main')

@section('title')
Автор {{ $author->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                Имя: {{ $author->name }} <br>
                День рождения: {{ $author->birthday }} <br>
                Биография: {{ $author->biography }} <br>
            </div>
            <div class="col-md-4">
                <img width="200" src="{{ asset('images/avatar/no-avatar.png') }}"> <br>
            </div>
        </div>
    </div>
@endsection

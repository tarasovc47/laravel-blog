<?php

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('home');
});
Route::get('/authors', function () {
    return view('authors');
});
Route::get('/categories', function () {
    return view('categories');
});
Route::get('/articles', function () {
    return view('articles');
});

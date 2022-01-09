<?php

Route::get('/', function () {
    return view('home');
});
Route::get('/authors', 'AuthorController@index');
Route::get('/authors/{id}', 'AuthorController@show');// {
Route::get('/categories', 'CategoryController@index');
Route::get('/categories/{id}', 'CategoryController@show');
Route::get('/articles', function () {
    return view('article.index');
});
Route::get('articles', 'ArticleController@index');
Route::get('articles/{id}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::put('articles/{id}', 'ArticleController@update');
Route::delete('articles/{id}', 'ArticleController@delete');

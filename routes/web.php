<?php

Route::get('/', function () {
    return view('home');
});
Route::get('/authors', 'AuthorController@index');
Route::get('/authors/{id}', 'AuthorController@show');
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
Route::get('authorSearch', 'AuthorController@search')->name('authorSearch');
Route::get('categorySearch', 'CategoryController@search')->name('categorySearch');
Route::get('articleSearch', 'ArticleController@search')->name('articleSearch');
Route::get('globalSearch', 'Controller@globalSearch')->name('globalSearch');

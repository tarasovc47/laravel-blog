<?php

Route::get('/', function () {
    return view('home');
});
Route::get('/authors', 'AuthorController@index');
    //return AuthorResource::collection(Author::all());
//});
Route::get('/authors/{id}', 'AuthorController@show');// {
    //return new AuthorResource(Author::findOrFail($id));
//});
Route::get('/categories', function () {
    return view('category.index');
});
Route::get('/articles', function () {
    return view('article.index');
});
Route::get('articles', 'ArticleController@index');
Route::get('articles/{id}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::put('articles/{id}', 'ArticleController@update');
Route::delete('articles/{id}', 'ArticleController@delete');

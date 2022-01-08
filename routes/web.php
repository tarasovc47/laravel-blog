<?php

use App\Http\Controllers\AuthorController;
use App\Http\Resources\AuthorResource;
use App\Models\Author;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('home');
});
Route::get('/authors', 'AuthorController@index');
    //return AuthorResource::collection(Author::all());
//});
Route::get('/authors/{id}', 'AuthorController@one');// {
    //return new AuthorResource(Author::findOrFail($id));
//});
Route::get('/categories', function () {
    return view('category.index');
});
Route::get('/articles', function () {
    return view('article.index');
});

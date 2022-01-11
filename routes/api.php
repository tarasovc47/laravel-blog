<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('authors', [AuthorController::class, 'index']); //работает
Route::get('authors/{id}', [AuthorController::class, 'show']); // работает
Route::get('authors/{id}/articles', [AuthorController::class, 'articles']); //работает
Route::get('categories', [CategoryController::class, 'index']); //работает
Route::get('categories/{id}/articles', [CategoryController::class, 'articles']);// работает
Route::get('articles', [ArticleController::class, 'index']); // работает
Route::get('articles/{id}', [ArticleController::class, 'show']); // работает
Route::get('articles/{id}/author', [ArticleController::class, 'author']); //работает
Route::get('articles/{id}/categories', [ArticleController::class, 'categories']); // работает

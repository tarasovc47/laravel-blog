<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleResource;
use App\Http\Resources\AuthorResource;
use App\Models\Article;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Auth\Passwords;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::simplePaginate(10);
        return view('author.index', compact('authors'));
    }
    public function show($slug)
    {
        $author = Author::query()->where('slug', '=', $slug)->first();
        return view('author.view', compact('author'));
    }
    public function search(Request $request)
    {
        $q = $request->input('search');
        $authors = Author::query()->where('name', 'LIKE', "%{$q}%")
            ->orWhere('biography', 'LIKE', "%{$q}%")
            ->paginate(10);
        return view('author.index', compact('authors'));
    }
    /**
     * Проверка API postman-ом
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    /*public function index()
    {
        $authors = Author::simplePaginate(10);
        return AuthorResource::collection($authors);
        //return view('author.index', compact('authors'));
    }
    public function articles($id)
    {
        $articles = Article::where('author_id', $id)->orderBy('id', 'desc')->paginate();
        return ArticleResource::collection($articles);
    }
    public function show($id)
    {
        $author = Author::where('id',$id)->get();
        return AuthorResource::collection($author);
    }*/
}

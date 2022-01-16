<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleResource;
use App\Http\Resources\ArticlesCategoryResource;
use App\Http\Resources\AuthorResource;
use App\Http\Resources\CategoryResource;
use App\Models\ArticlesCategory;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::query()
            ->with('author')
            ->paginate(10);
        return view('article.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::query()->where('slug', '=', $slug)->first();
        return view('article.view', compact('article'));
    }

    /**
     * тест API Postman-ом
     */
    /*public function index()
    {
        $articles = Article::simplePaginate(10);
        return ArticleResource::collection($articles);
    }

    public function author($id)
    {
        $author_id = Article::findOrFail($id)->author_id;
        $author = Author::where('id', $author_id)->get();
        return AuthorResource::collection($author);
    }
    public function categories($id)
    {
        $categories = ArticlesCategory::where('category_id', $id)->orderBy('article_id', 'desc')->paginate();
        return ArticlesCategoryResource::collection($categories);
    }

    public function show($id)
    {
        $article = Article::where('id',$id)->get();
        return ArticleResource::collection($article);
    }*/

    public function search(Request $request)
    {
        $q = $request->input('search');
        $articles = Article::query()->where('title', 'LIKE', "%{$q}%")
            ->orWhere('text', 'LIKE', "%{$q}%")
            ->paginate(10);
        return view('article.index', [
            'articles' => $articles
        ]);
    }

    public function store(Request $request)
    {
        return Article::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return 204;
    }
}

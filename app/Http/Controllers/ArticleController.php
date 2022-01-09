<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::simplePaginate(10);
        return view('article.index', compact('articles'));
    }

    public function show($slug)
    {
        return view('article.view', [
            'article' => Article::query()->where('slug', '=', $slug)->first()
        ]);
    }

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

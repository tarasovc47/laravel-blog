<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleResource;
use App\Http\Resources\ArticlesCategoryResource;
use App\Http\Resources\CategoryResource;
use App\Models\Article;
use App\Models\ArticlesCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::simplePaginate(10);
        return view('category.index', compact('categories'));
    }
    public function show($slug)
    {
        $category = Category::query()->where('slug', '=', $slug)->first();
        return view('category.view', compact('category'));
    }

    public function search(Request $request)
    {
        $q = $request->input('search');
        $categories = Category::query()->where('title', 'LIKE', "%{$q}%")
            ->orWhere('description', 'LIKE', "%{$q}%")
            ->paginate(10);
        return view('category.index', compact('categories'));
    }
    /**
     * проверка API Postman-ом
     *
     */
    /*public function index()
    {
        $categories = Category::simplePaginate(10);
        return CategoryResource::collection($categories);
    }
    public function articles($id)
    {
        $articles = ArticlesCategory::where('category_id', $id)->orderBy('category_id', 'desc')->paginate();
        return ArticlesCategoryResource::collection($articles);
    }*/
}

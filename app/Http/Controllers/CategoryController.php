<?php

namespace App\Http\Controllers;

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
        return view('category.view', [
            'category' => Category::query()->where('slug', '=', $slug)->first(),
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::simplePaginate(10);
        return view('author.index', compact('authors'));
    }
    public function show($slug)
    {
        /*$author = Author::query()->where('slug', '=', $slug);
        return view('author.view', compact('author'));*/
        return view('author.view', [
            'author' => Author::query()->where('slug', '=', $slug)->first(),
        ]);
    }
}

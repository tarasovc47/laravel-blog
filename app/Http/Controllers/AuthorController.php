<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::simplePaginate(10);
        return view('author.index', compact('authors'));
    }
    public function show($slug)
    {
        return view('author.view', [
            'author' => Author::query()->where('slug', '=', $slug)->first(),
        ]);
    }
    public function search(Request $request)
    {
        $q = $request->input('search');
        $authors = Author::query()->where('name', 'LIKE', "%{$q}%")->paginate(10);
        return view('author.index', [
            'authors' => $authors
        ]);
    }
}

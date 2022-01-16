<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * @OA\Swagger(
     *     shemes={"http"},
     *     host="localhost",
     *     basePath="/",
     *     @OA\Info(
     *          title="Laravel blog API",
     *          version="1.0"
     *     )
     * )
     */
    public function globalSearch(Request $request)
    {
        $q = $request->input('search');
        $articles = Article::query()->where('title', 'LIKE', "%{$q}%")
            ->orWhere('text', 'LIKE', "%{$q}%")
            ->paginate(10);
        $categories = Category::query()->where('title', 'LIKE', "%{$q}%")
            ->orWhere('description', 'LIKE', "%{$q}%")
            ->paginate(10);
        $authors = Author::query()->where('name', 'LIKE', "%{$q}%")
            ->orWhere('biography', 'LIKE', "%{$q}%")
            ->paginate(10);
        return view('home', compact(['articles', 'categories', 'authors']));
    }
}

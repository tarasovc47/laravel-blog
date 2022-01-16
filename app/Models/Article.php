<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public function author()
    {
        //статья принадлежит одному автору
        return $this->belongsTo(Author::class);
    }
    public function category()
    {
        //статья принадлежит многим категориям
        return $this->belongsToMany(Category::class, 'articles_categories');
    }
    /**
     * @OA\Definition (
     *     definition="Article",
     *     @OA\Property(
     *         property="id",
     *         type="integer"
     *     ),
     *     @OA\Property(
     *         property="title",
     *         type="string"
     *     ),
     *     @OA\Property(
     *         property="text",
     *         type="string"
     *     )
     * )
     */
}

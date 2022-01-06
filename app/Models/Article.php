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
        return $this->hasOne(Author::class);
    }
    public function category()
    {
        //статья принадлежит многим категориям
        return $this->belongsTo(Category::class);
    }
}

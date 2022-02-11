<?php

namespace App\Http\Controllers;

use App\Models\Article;

class BlogController
{

    public function show($Id)
    {
        $article = Article::find($Id);

        return view('articles.show', ['article' => $article]);
    }
}

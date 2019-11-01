<?php

namespace App\Http\Controllers;

use App\Repository\ArticleRepository;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    private $a;
    public function __construct(ArticleRepository $a)
    {
        $this->a = $a;
    }

    public function categorie($id)
    {
        return view('site.article.index',[
            'article' => $this->a->getArticleByCategory($id),
        ]);
    }
}

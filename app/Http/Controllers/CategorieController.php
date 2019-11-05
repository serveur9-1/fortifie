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

    //administration
    
    public function listCategorie()
    {
        return view('admin.categorie.listCategorie');
    }

    public function addCategorie()
    {
        return view('admin.categorie.addCategorie');
    }

    public function listSousCategorie()
    {
        return view('admin.sousCategories.listSousCategorie');
    }

    public function addSousCategorie()
    {
        return view('admin.sousCategories.addSousCategorie');
    }

}

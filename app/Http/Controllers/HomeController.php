<?php

namespace App\Http\Controllers;

use App\Article;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $r;
    private $a;

    public function __construct(CategoryRepository $r, ArticleRepository $art)
    {
        $this->r = $r;
        $this->a = $art;
    }

/*    public function index()
    {
        return view('site.index');
    }*/

    public function index()
    {
        return view('site.article.index',[
            'article' => $this->a->getArticle(),
            'popcategory' => $this->r->getCategory()
        ]);
    }

    public function description($id)
    {
        return view('site.article.annonce_desc',[
            'article' => $this->a->getArticleWithId($id),
            'otherArticle' => $this->a->getSomeArticleOf($id, $this->a->getArticleWithId($id)->diocese->id, $this->a->getArticleWithId($id)->category->id)
        ]);
    }

    public function myAnnonce(Request $request)
    {

        return view('site.article.mesAnnonce',[
            'my_article_a' => $this->a->countArticle(42, 3),
            'my_article_i' => $this->a->countArticle(42, 3, false),
            'my_article' => $this->a->getMyArticle(42, 3, $request['active'])
        ]);
    }

    public function publier()
    {
        return view('site.article.publier',[

        ]);
    }



    //Recherche

    public function query(Request $request)
    {
        return view('site.article.index',[
            'article' => $this->a->search($request['title'], $request['category'], $request['diocese'])
        ]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Article;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use App\Ville;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private $r;
    private $a;
    private $auth;

    public function __construct(CategoryRepository $r, ArticleRepository $art, AuthManager $auth)
    {
        //$this->middleware('auth');
        $this->r = $r;
        $this->a = $art;
        $this->auth = $auth;
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

    public function deleteArticle($id)
    {
        $this->a->deleteArticle(42, 3, $id);
        return redirect()->back()->with('success','Vous avez bien supprimé l\'annonce ');
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
        $v = new Ville();
        return view('site.article.publier',[
            'ville' => $v->newQuery()->select()->orderBy('libelle','ASC')->get()
        ]);
    }



    //Recherche

    public function query(Request $request)
    {
        return view('site.article.index',[
            'article' => $this->a->search($request['title'], $request['category'], $request['diocese'])
        ]);
    }

    // Recherche my annonce



    public function searchAnnonce(Request $request)
    {
        return view('site.article.mesAnnonce',[
            'my_article_a' => $this->a->countArticle(42, 3),
            'my_article_i' => $this->a->countArticle(42, 3, false),
            'my_article' => $this->a->searchOnDashboard($request['word'], 42)
        ]);

    }

}

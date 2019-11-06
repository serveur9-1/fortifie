<?php

namespace App\Http\Controllers;

use App\Article;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use App\Repository\UserRepository;
use App\Repository\VisiteurRepository;
use App\Ville;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private $r;
    private $a;
    private $auth;
    private $visite;

    public function __construct(CategoryRepository $r, ArticleRepository $art,UserRepository $auth, VisiteurRepository $v)
    {
        //$this->middleware('auth');
        $this->r = $r;
        $this->a = $art;
        $this->auth = $auth;

        $this->visite = $v;
    }


    public function index()
    {
        $this->visite->visitedSite();

        return view('site.article.index',[
            'article' => $this->a->getArticle(),
            'popcategory' => $this->r->getMostPopulateCategory()
        ]);

    }

    public function description($id)
    {
        $this->visite->visitedArticle($id);

        return view('site.article.annonce_desc',[
            'article' => $this->a->getArticleWithId($id),
            'otherArticle' => $this->a->getSomeArticleOf($id, $this->a->getArticleWithId($id)->diocese->id, $this->a->getArticleWithId($id)->category->id)
        ]);
    }

    public function deleteArticle($id)
    {
        $this->a->deleteArticle($this->auth->getGUserId(), $this->auth->getUserDioceseId(), $id);
        return redirect()->back()->with('success','Vous avez bien supprimé l\'annonce ');
    }

    public function myAnnonce(Request $request)
    {

        return view('site.article.mesAnnonce',[
            'my_article_a' => $this->a->countArticle($this->auth->getGUserId(), $this->auth->getUserDioceseId()),
            'my_article_i' => $this->a->countArticle($this->auth->getGUserId(), $this->auth->getUserDioceseId(), false),
            'my_article' => $this->a->getMyArticle($this->auth->getGUserId(), $this->auth->getUserDioceseId(), $request['active'])
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
            'my_article_a' => $this->a->countArticle($this->auth->getGUserId(), $this->auth->getUserDioceseId()),
            'my_article_i' => $this->a->countArticle($this->auth->getGUserId(), $this->auth->getUserDioceseId(), false),
            'my_article' => $this->a->searchOnDashboard($request['word'], $this->auth->getGUserId())
        ]);

    }


    //administration

    public function admin()
    {
        return view('admin.Accueil');
    }


}

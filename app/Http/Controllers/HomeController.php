<?php

namespace App\Http\Controllers;

use App\Article;
use App\Diocese;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use App\Repository\NewsletterRepository;
use App\Repository\ParoisseRepository;
use App\Repository\SubCategoryRepository;
use App\Repository\UsersRepository;
use App\Repository\VisiteurRepository;
use App\Shared\ArticleViewFormat;
use App\SubCategory;
use App\Ville;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private $r;
    private $a;
    private $auth;
    private $visite;

    public function __construct(
        CategoryRepository $r,
        ArticleRepository $art,
        UsersRepository $auth,
        VisiteurRepository $v,
        ArticleViewFormat $avf,
        NewsletterRepository $nl,
        ParoisseRepository $p,
        SubCategoryRepository $sc
    ){
        //$this->middleware('auth');
        $this->r = $r;
        $this->a = $art;
        $this->auth = $auth;

        $this->visite = $v;

        $this->avf = $avf;

        $this->nl = $nl;
        $this->p = $p;

        $this->sc = $sc;

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
        $this->visite->visitedSite();
        $this->visite->visitedArticle($id);


        return view('site.article.annonce_desc',[
            'article' => $this->a->getArticleWithId($id),
            'vue' => $this->avf->number_format_short($this->a->getArticleWithId($id)->visiteur->count()),
            'otherArticle' => $this->a->getSomeArticleOf($id, $this->a->getArticleWithId($id)->paroisse->diocese->id, $this->a->getArticleWithId($id)->category->id)
        ]);
    }

    public function deleteArticle($id)
    {
        $this->a->deleteArticle($id);
        return redirect()->back()->with('success','Vous avez bien supprimé l\'annonce ');
    }

    public function myAnnonce(Request $request)
    {
        //Verify connexion type
/*
        if($this->auth->userIsAdmin() == 1)
        {
            redirect()->route('Accueil');
        }*/

        $this->visite->visitedSite();

        return view('site.article.mesAnnonce',[
            'my_article' => $this->a->getMyArticle($this->auth->getGUserId(), $this->auth->getUserParoisseId(), $request['active']),
            'my_article_a' => $this->a->countArticle($this->auth->getGUserId(), $this->auth->getUserParoisseId()),
            'my_article_i' => $this->a->countArticle($this->auth->getGUserId(), $this->auth->getUserParoisseId(), false)
        ]);
    }

    public function publier()
    {
        $this->visite->visitedSite();

        return view('site.article.publier',[
            'edit' => false
        ]);
    }




    public function editPublier($id)
    {
        $this->visite->visitedSite();

        return view('site.article.publier',[
            'edit' => true,
            'a' => Article::findOrFail($id)
        ]);
    }


    public function publierParticulier()
    {
        $this->visite->visitedSite();

        return view('site.article.particuliere',[
            'subCategory' => $this->sc->getSubCategory(),
            'edit' => false
        ]);
    }


    public function editPublierParticulier($id)
    {

        $this->visite->visitedSite();

        return view('site.article.particuliere',[
            'edit' => true,
            'a' => Article::findOrFail($id),
            'subCategory' => $this->sc->getSubCategory()
        ]);
    }



    //Recherche

    public function query(Request $request)
    {

        return view('site.article.index',[
            'article' => $this->a->search($request['title'], $request['category'], $request->diocese, $request->date )
        ]);
    }

    // Recherche my annonce



    //administration

    public function admin()
    {

        //dd($this->visite->getVisitorData()->attributesToArray());
        $data = $this->visite->getVisitorData();

        return view('admin.Accueil',[
            'nb_visiteur' => $this->avf->number_format_short($this->visite->getAllVisitors()->count()),
            'nb_article' => $this->avf->number_format_short($this->a->getArticleAdmin()->count()),
            'nb_compte' => $this->avf->number_format_short($this->auth->getUser()->count()),
            'nb_abonne' => $this->avf->number_format_short($this->nl->getNewsletterSuscriber()->count()),
            'data_m' => json_encode(array_column($data, 'm'),JSON_NUMERIC_CHECK),
            'data_d' => json_encode(array_column($data, 'd'),JSON_NUMERIC_CHECK),
        ]);
    }


}

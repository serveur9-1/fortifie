<?php

namespace App\Http\Controllers;

use App\Article;
use App\Diocese;
use App\Gallery;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use App\Repository\NewsletterRepository;
use App\Repository\ParoisseRepository;
use App\Repository\SubCategoryRepository;
use App\Repository\UsersRepository;
use App\Repository\VisiteurRepository;
use App\Repository\DioceseRepository;
use App\Repository\PubRepository;
use App\Repository\GalleryRepository;
use App\Shared\ArticleViewFormat;
use App\SubCategory;
use App\Ville;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
        DioceseRepository $dio,
        PubRepository $pub,
        GalleryRepository $ga,
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
        
        $this->dio = $dio;
        $this->pub = $pub;
        $this->ga = $ga;

    }


    public function index()
    {
        $this->visite->visitedSite();

        return view('site.article.index',[
            'article' => $this->a->getArticle(),
            'popcategory' => $this->r->getMostPopulateCategory(),
            'banner_pub' => $this->pub->getBannerPub()
        ]);

    }

    public function description($id)
    {
        $this->visite->visitedSite();
        $this->visite->visitedArticle($id);


        return view('site.article.annonce_desc',[
            'article' => $this->a->getArticleWithId($id),
            'vue' => $this->avf->number_format_short($this->a->getArticleWithId($id)->visiteur->count()),
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
            'article' => $this->a->search($request['title'], $request['category'], $request->diocese, $request->date ),
            'banner_pub' => $this->pub->getBannerPub()
        ]);
    }


    public function apiQuery(Request $request)
    {
        return $this->a->search($request['title'], $request['category'], $request->diocese, $request->date );
    }

    // Recherche my annonce



    //administration

    public function admin()
    {

        //dd($this->visite->getVisitorData()->attributesToArray());
        $data = $this->visite->getVisitorData();  

        $a = new Article();
        // SELECT 
        $batonne = DB::table('articles')
                        ->join('categories', DB::raw('categories.id'),'=', DB::raw('articles.category_id'))
                        ->select(DB::raw('categories.libelle as c, count(articles.id) as t'))
                        ->groupBy('c')
                        ->orderBy('t','DESC')
                        ->get()->toArray();
        //dd($batonne);
        return view('admin.Accueil',[
            'nb_visiteur' => $this->avf->number_format_short($this->visite->getAllVisitors()->count()),
            'nb_article' => $this->avf->number_format_short($this->a->getArticleAdmin()->count()),
            'nb_compte' => $this->avf->number_format_short($this->auth->getUser()->count()),
            'nb_abonne' => $this->avf->number_format_short($this->nl->getNewsletterSuscriber()->count()),
            'nb_diocese' => $this->avf->number_format_short($this->dio->getDiocese()->count()),
            'nb_paroisse' => $this->avf->number_format_short($this->p->getParoisse()->count()),
            'nb_pub' => $this->avf->number_format_short($this->pub->getPub()->count()),
            'nb_gallery' => $this->avf->number_format_short(Gallery::all()->count()),
            'data_d' => json_encode(array_column($data, 'd'),JSON_NUMERIC_CHECK),
            'data_m' => json_encode(array_column($data, 'm'),JSON_NUMERIC_CHECK),
            'batonne_m' => json_encode(array_column($batonne, 'c'),JSON_NUMERIC_CHECK),
            'batonne_d' => json_encode(array_column($batonne, 't'),JSON_NUMERIC_CHECK),
        ]);
    }


}

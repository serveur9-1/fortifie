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
        return view('site.index',[
            'article' => $this->a->getArticle()
        ]);
    }

    public function description()
    {
        return view('site.annonce_desc',[
        
        ]);
    }

    public function myAnnonce()
    {
        return view('site.mesAnnonce',[
        
        ]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function description()
    {
        return view('site.article.annonce_desc',[
        
        ]);
    }

    public function myAnnonce()
    {
        return view('site.article.mesAnnonce',[
        
        ]);
    }

    public function publier()
    {
        return view('site.article.publier',[
        
        ]);
    }
}

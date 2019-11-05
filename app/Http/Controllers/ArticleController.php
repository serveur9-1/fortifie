<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
   public function listAnnonce()
    {
        return view('admin.annonce.listAnnonce');
    }

      public function addAnnonce()
    {
        return view('admin.annonce.addAnnonce');
    }
}

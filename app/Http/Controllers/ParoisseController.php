<?php

namespace App\Http\Controllers;

use App\Paroisse;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Illuminate\Http\Request;

class ParoisseController extends Controller
{
    private $p;

    public function __construct(ArticleRepository $r)
    {
        $this->p = $r;
    }

    public function index($id)
    {
        return view('site.paroisse.index',[
            'paroisse' => $this->p->getArticleByParoisse($id)
        ]);
    }


    //administatration
    public function listParoisse()
    {
        return view('admin.paroisse.listParoisse');
    }

    public function addParoisse()
    {
        return view('admin.paroisse.addParoisse');
    }
}

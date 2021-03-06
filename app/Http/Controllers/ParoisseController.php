<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParoisseRequest;
use App\Paroisse;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use App\Repository\DioceseRepository;
use App\Repository\VilleRepository;
use App\Repository\ParoisseRepository;
use App\Repository\PubRepository;
use Illuminate\Http\Request;

class ParoisseController extends Controller
{
    private $p;

    public function __construct(PubRepository $pub, ArticleRepository $r,VilleRepository $v, ParoisseRepository $p, DioceseRepository $d, CategoryRepository $cr)
    {
        $this->a = $r;
        $this->p = $p;
        $this->d = $d;
        $this->v = $v;
        $this->pub = $pub;
        $this->cr = $cr;
    }

    public function index($id)
    {
        return view('site.article.index',[
            'article' => $this->a->getArticleByParoisse($id),
            'popcategory' => $this->cr->getMostPopulateCategory(),
            'banner_pub' => $this->pub->getBannerPub()
        ]);
    }

    public function paroisses()
    {
        return view('site.paroisse.paroisses', [
            'paroisse' => $this->p->getCommunity(),
        ]);
    }


    //administatration
    public function listParoisse()
    {
        return view('admin.paroisse.listParoisse', [
            'paroisse' => $this->p->getParoisse(),
        ]);
    }

    public function addParoisse()
    {
        return view('admin.paroisse.addParoisse',[
            'edit' => false,
            'diocese' => $this->d->getDiocese(),
            'ville' => $this->v->getVille()
        ]);
    }

    public function validParoisse(ParoisseRequest $request)
    {
        $this->p->createParoisse($request);
        return redirect()->back()->with('success', "Vous avez bien ajouté une nouvelle paroisse.");
    }


    public function editParoisse($id)
    {
        return view('admin.paroisse.addParoisse',[
            'edit' => true,
            'diocese' => $this->d->getDiocese(),
            'p' => Paroisse::findOrFail($id),
            'ville' => $this->v->getVille()
        ]);
    }

    public function updateParoisse($id, ParoisseRequest $request)
    {
        $this->p->updateParoisse($id, $request);
        return redirect()->back()->with('success', "Vous avez bien modifié une paroisse.");
    }


    public function deleteParoisse($id)
    {
        $this->p->deleteParoisse($id);

        return redirect()->back()->with('success', "Vous avez bien supprimé une paroisse.");
    }
}

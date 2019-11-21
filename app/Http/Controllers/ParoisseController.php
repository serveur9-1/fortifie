<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParoisseRequest;
use App\Paroisse;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use App\Repository\DioceseRepository;
use App\Repository\ParoisseRepository;
use Illuminate\Http\Request;

class ParoisseController extends Controller
{
    private $p;

    public function __construct(ArticleRepository $r, ParoisseRepository $p, DioceseRepository $d, CategoryRepository $cr)
    {
        $this->a = $r;
        $this->p = $p;
        $this->d = $d;
        $this->cr = $cr;
    }

    public function index($id)
    {
        return view('site.article.index',[
            'article' => $this->a->getArticleByParoisse($id),
            'popcategory' => $this->cr->getMostPopulateCategory()
        ]);
    }


    //administatration
    public function listParoisse()
    {
        return view('admin.paroisse.listParoisse', [
            'paroisse' => $this->p->getParoisse()
        ]);
    }

    public function addParoisse()
    {
        return view('admin.paroisse.addParoisse',[
            'edit' => false,
            'diocese' => $this->d->getDiocese()
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
            'p' => Paroisse::findOrFail($id)
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

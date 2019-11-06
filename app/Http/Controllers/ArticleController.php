<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use App\Repository\ParoisseRepository;
use App\Shared\SaveArticleImg;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
   public function __construct(ArticleRepository $a, ParoisseRepository $p, CategoryRepository $c, SaveArticleImg $sv)
   {
       $this->a = $a;
       $this->p = $p;
       $this->c = $c;
       $this->sv = $sv;
   }

    public function listAnnonce()
    {
        return view('admin.annonce.listAnnonce',[
            'article' => $this->a->getArticleAdmin()
        ]);
    }

    public function enableOrdisableArticle($id,$enable)
    {
        $this->a->enableOrDisableArticle($id, $enable);

        if($enable){
            $state = "désactivé";
        }else{
            $state = "activé";
        }

        return redirect()->back()->with('success',"Vous avez bien $state une annonce");
    }

    public function deleteAnnonce($id)
    {
        $this->a->deleteArticle($id);
        return redirect()->back()->with('success',"Vous avez bien supprimé une annonce");
    }

    public function addAnnonce()
    {
        return view('admin.annonce.addAnnonce',[
            'paroisse' => $this->p->getParoisse(),
            'category' => $this->c->getCategory()
        ]);
    }

    public function validAnnonce(ArticleRequest $request)
    {
        $this->sv->saveImg($request);
        $request->img = $request->file('img')->getClientOriginalName();
        $this->a->createArticle($request);
        return redirect()->back()->with('success',"Vous avez bien ajouté une nouvelle annonce");
    }
}

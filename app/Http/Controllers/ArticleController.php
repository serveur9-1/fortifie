<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ArticleUpdateRequest;
use App\Mail\NewsletterMail;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use App\Repository\ParoisseRepository;
use App\Repository\UsersRepository;
use App\Shared\SaveImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ArticleController extends Controller
{
   public function __construct(ArticleRepository $a, ParoisseRepository $p, CategoryRepository $c, SaveImg $sv, UsersRepository $ur)
   {
       $this->a = $a;
       $this->p = $p;
       $this->c = $c;
       $this->sv = $sv;
       $this->ur = $ur;
   }

    public function listAnnonce()
    {
        return view('admin.annonce.listAnnonce',[
            'article' => $this->a->getArticleAdmin()
        ]);
    }

    public function enableOrdisableArticle($id,$enable, Request $request)
    {
        $this->a->enableOrDisableArticle($id, $enable, $request);

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
            'category' => $this->c->getCategory(),
            'edit' => false
        ]);
    }

    public function annonceSignale()
    {
        return view('admin.annonce.annonceSignale');
    }

    public function validAnnonce(ArticleRequest $request)
    {
        
        $request->img = $request->file('img')->getClientOriginalName();
        //dd($request->img);
        //$this->sv->saveImg($request, '/articles', 'img');


        //Verifier si user n'est pas admin
        if(!$this->ur->userIsAdmin()){
            $request->paroisse = $this->ur->getUserParoisseId();
            dd('ok');
        }
//dd("no");
        $this->a->createArticle($request);

        //Mail::send(New NewsletterMail($request));

        return redirect()->back()->with('success',"Vous avez bien ajouté une nouvelle annonce");
    }

    public function editAnnonce($id)
    {
        return view('admin.annonce.addAnnonce',[
            'paroisse' => $this->p->getParoisse(),
            'category' => $this->c->getCategory(),
            'article' => Article::findOrFail($id),
            'edit' => true
        ]);
    }

    public function updateAnnonce($id, ArticleUpdateRequest $request)
    {
        if(isset($request->img)){
            $request->img = $request->file('img')->getClientOriginalName();
            $this->sv->saveImg($request, '/articles');
        }else{
            $request->img = Article::findOrFail($id)->img;
        }

        //Verifier si user n'est pas admin
        if(!$this->ur->userIsAdmin()){
            $request->paroisse = $this->ur->getUserParoisseId();
        }


        $this->a->updateArticle($id, $request);
        return redirect()->back()->with('success',"Vous avez bien modifié une annonce");
    }
}

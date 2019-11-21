<?php

namespace App\Http\Controllers;

use App\Http\Requests\PubRequest;
use App\Http\Requests\PubUpdateRequest;
use App\Pub;
use App\Repository\PubRepository;
use App\Shared\SaveImg;
use App\User;
use Illuminate\Http\Request;

class PubController extends Controller
{
    private $p;

    public function __construct(PubRepository $p, SaveImg $sv)
    {
        $this->p = $p;
        $this->sv = $sv;
    }

    //administration
    public function listPub()
    {
        return view('admin.publicite.listPub',[
            'pub' => $this->p->getPub()
        ]);
    }


    public function enableOrdisablePub($id,$enable)
    {
        $this->p->enableOrdisablePub($id, $enable);

        if($enable){
            $state = "désactivé";
        }else{
            $state = "activé";
        }

        return redirect()->back()->with('success',"Vous avez bien $state une publicité.");
    }


    public function deletePub($id)
    {
        $this->p->deletePub($id);
        return redirect()->back()->with('success',"Vous avez bien supprimé une publicité.");
    }

    public function addPub()
    {
        return view('admin.publicite.addPub',['edit' => false]);
    }


    public function validPub(PubRequest $request)
    {
        $request->img = $request->file('img')->getClientOriginalName();
        $this->sv->saveImg($request, '/pubs');
        $this->p->createPub($request);

        return redirect()->back()->with('success',"Vous avez bien ajouté une publicité.");
    }


    public function editPub($id)
    {
        return view('admin.publicite.addPub',[
            'edit' => true,
            'p' => Pub::findOrFail($id)
        ]);
    }

    public function updatePub($id, PubUpdateRequest $request)
    {
        if(isset($request->img)){
            $this->sv->saveImg($request, '/pubs');
            $request->img = $request->file('img')->getClientOriginalName();
        }else{
            $request->img = Pub::findOrFail($id)->img;
        }
        $this->p->updatePub($id, $request);

        return redirect()->back()->with('success',"Vous avez bien modifié une publicité.");
    }


}

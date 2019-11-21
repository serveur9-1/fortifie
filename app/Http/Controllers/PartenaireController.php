<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartenaireRequest;
use App\Http\Requests\PartenaireUpdateRequest;
use App\Partenaire;
use App\Repository\PartenaireRepository;
use App\Shared\SaveImg;
use App\User;
use Illuminate\Http\Request;

class PartenaireController extends Controller
{
    public function __construct(PartenaireRepository $p, SaveImg $sv)
    {
        $this->p = $p;
        $this->sv = $sv;
    }

    public function listPartner()
	{
		return view('admin.partenaire.listPartner',[
		    'partenaire' => $this->p->getPartenaire()
        ]);
	}


	public function deletePartner($id)
    {
        $this->p->deletePartenaire($id);
        return redirect()->back()->with('success','Vous avez bien supprimé un partenaire.');
    }

	public function addPartner()
	{
		return view('admin.partenaire.addPartner',[
            'edit' => false
        ]);
	}


    public function validPartner(PartenaireRequest $request)
    {
        $request->logo = $request->file('logo')->getClientOriginalName();
        $this->sv->saveImg($request, '/partenaires','logo');
        $this->p->createPartenaire($request);
        return redirect()->back()->with('success','Vous avez bien ajouté un partenaire.');
    }

    public function editPartner($id)
    {
        return view('admin.partenaire.addPartner',[
            'p' => Partenaire::findOrFail($id),
            'edit' => true
        ]);
    }


    public function updatePartner($id, PartenaireUpdateRequest $request)
    {
        if(isset($request->logo)){
            $request->logo = $request->file('logo')->getClientOriginalName();
            $this->sv->saveImg($request, '/partenaires', 'logo');
        }else{
            $request->logo = Partenaire::findOrFail($id)->logo;
        }
        $this->p->updatePartenaire($id, $request);
        return redirect()->back()->with('success','Vous avez bien modifié un partenaire.');
    }

}

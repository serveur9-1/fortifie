<?php

namespace App\Http\Controllers;

use App\Http\Requests\VilleRequest;
use App\Repository\VilleRepository;
use App\Ville;
use Illuminate\Http\Request;

class VilleController extends Controller
{
    public function __construct(VilleRepository $v)
    {
        $this->v = $v;
    }


    public function listVille()
    {
        return view('admin.ville.listVille', [
            'ville' => $this->v->getVille()
        ]);
    }


    public function deleteVille($id)
    {
        $this->v->deleteVille($id);

        return redirect()->back()->with('success',"Vous avez bien supprimé une ville.");
    }

    public function addVille()
    {
        return view('admin.ville.addVille',[
            'edit' => false
        ]);
    }


    public function validVille(VilleRequest $request)
    {
        $this->v->createVille($request);

        return redirect()->back()->with('success',"Vous avez ajouté une ville.");
    }

    public function editVille($id)
    {
        return view('admin.ville.addVille',[
            'edit' => true,
            'v' => Ville::findOrFail($id)
        ]);
    }

    public function updateVille($id, VilleRequest $request)
    {
        $this->v->updateVille($id, $request);

        return redirect()->back()->with('success',"Vous avez modifié une ville.");
    }
}

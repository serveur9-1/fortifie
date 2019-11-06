<?php

namespace App\Http\Controllers;

use App\Diocese;
use App\Http\Requests\DioceseRequest;
use App\Http\Requests\VilleRequest;
use App\Repository\DioceseRepository;
use App\Repository\VilleRepository;
use Illuminate\Http\Request;

class DioceseController extends Controller
{

    public function __construct(DioceseRepository $d, VilleRepository $v)
    {
        $this->d = $d;
        $this->v = $v;
    }

    public function listDiocese()
	{
		return view('admin.diocese.listDiocese', ['diocese' => $this->d->getDiocese()]);
	}

	public function addDiocese()
	{
		return view('admin.diocese.addDiocese', [
		    'ville' => $this->v->getVille(),
            'edit' => false
        ]);
	}

	public function editDiocese($id)
    {
        return view('admin.diocese.addDiocese', [
            'diocese' => Diocese::findOrFail($id),
            'ville' => $this->v->getVille(),
            'edit' => true
        ]);
    }


	public function validDiocese(DioceseRequest $request)
    {
        $this->d->createDiocese($request);

        return redirect()->back()->with('success', 'Vous avez ajouté un nouveau diocèse');
    }


    public function updateDiocese($id, DioceseRequest $request)
    {
        $this->d->updateDiocese($id, $request);

        return redirect()->back()->with('success', 'Vous avez ajouté un nouveau diocèse');
    }


    public function deleteDiocese($id)
    {
        $this->d->deleteDiocese($id);

        return redirect()->back()->with('success', 'Vous avez supprimé un diocèse');
    }
}

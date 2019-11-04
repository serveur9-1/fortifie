<?php

namespace App\Http\Controllers;

use App\Repository\PubRepository;
use Illuminate\Http\Request;

class PubController extends Controller
{
    private $p;

    public function __construct(PubRepository $p)
    {
        $this->p = $p;
    }

    public function delete($id)
    {
        $this->p->deleteGallery($id);
        return redirect()->back()->with('success',"Vous avez bien supprimé l'image de la galérie");
    }

    public function update($id, Request $request)
    {
        $this->p->updateGallery($id, $request['img'], $request['legende']);

        return redirect()->back()->with('success',"Vous avez bien modifié l'image de la galérie");
    }
}

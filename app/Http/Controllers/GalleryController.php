<?php

namespace App\Http\Controllers;

use App\Repository\GalleryRepository;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    private $g;

    public function __construct(GalleryRepository $g)
    {
        $this->g = $g;
    }

    public function gallery()
	{

		return view('site.galerie.galerie',[
		    'gallery' => $this->g->getGallery()
        ]);
	}

	public function delete($id)
    {
        $this->g->deleteGallery($id);
        return redirect()->back()->with('success',"Vous avez bien supprimé l'image de la galérie");
    }

    public function update($id, Request $request)
    {
        $this->g->updateGallery($id, $request['img'], $request['legende']);

        return redirect()->back()->with('success',"Vous avez bien modifié l'image de la galérie");
    }

    //administration
    
    public function listGalleryAdmin()
    {
        return view('admin.gallerie.listGallerie');
    }

    public function addGalleryAdmin()
    {
        return view('admin.gallerie.addGallerie');
    }
}

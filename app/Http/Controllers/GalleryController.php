<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests\GalleryRequest;
use App\Http\Requests\GalleryUpdateRequest;
use App\Repository\GalleryRepository;
use App\Shared\SaveImg;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    private $g;

    public function __construct(GalleryRepository $g, SaveImg $sv)
    {
        $this->g = $g;
        $this->sv = $sv;
    }

    public function gallery()
	{

		return view('site.galerie.galerie',[
		    'gallery' => $this->g->getGallery(false)
        ]);
	}


    public function enableOrDisableGalleryImage($id,$enable)
    {
        $this->g->enableOrDisableGalleryImage($id, $enable);

        if($enable){
            $state = "désactivé";
        }else{
            $state = "activé";
        }

        return redirect()->back()->with('success',"Vous avez bien $state une image.");
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
        return view('admin.gallerie.listGallerie',[
            'gallery' => $this->g->getGallery(true)
        ]);
    }

    public function createAlbum()
    {
        return view('admin.gallerie.createAlbum');
    }


    function deleteGallery($id)
    {
        $this->g->deleteGallery($id);

        return redirect()->back()->with('success',"Vous avez bien supprimé une image.");
    }

    public function addGalleryAdmin()
    {
        return view('admin.gallerie.addGallerie',[
            'edit' => false
        ]);
    }


    function validGallery(GalleryRequest $request)
    {

        $request->img = $request->file('img')->getClientOriginalName();
        $this->sv->saveImg($request, '/galeries');
        $this->g->createGallery($request);

        return redirect()->back()->with('success',"Vous avez bien ajouté une image.");
    }


    public function editGallery($id)
    {
        return view('admin.gallerie.addGallerie',[
            'edit' => true,
            'g' => Gallery::findOrFail($id)
        ]);
    }


    function updateGallery($id,GalleryUpdateRequest $request)
    {
        if(isset($request->img))
        {
            $request->img = $request->file('img')->getClientOriginalName();
            $this->sv->saveImg($request, '/galeries');

        }else{
            $request->img = Gallery::findOrFail($id)->img;
        }

        $this->g->updateGallery($id, $request);

        return redirect()->back()->with('success',"Vous avez bien modifié une image.");
    }

    //album

    public function album()
    {
        return view('site.galerie.album');
    }

}

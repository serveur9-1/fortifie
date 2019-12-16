<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Album;
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

    public function gallery(Request $request)
	{

		return view('site.galerie.galerie',[
		    'gallery' => $this->g->getGallery(false, $request)
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


    public function enableOrDisableAlbum($id,$enable)
    {
        $this->g->enableOrDisableAlbum($id, $enable);

        if($enable){
            $state = "désactivé";
        }else{
            $state = "activé";
        }

        return redirect()->back()->with('success',"Vous avez bien $state un album.");
    }


	public function delete($id)
    {
        $this->g->deleteGallery($id);
        return redirect()->back()->with('success',"Vous avez bien supprimé l'image de la galérie");
    }

    public function deleteAlbum($id)
    {
        $this->g->deleteAlbum($id);
        return redirect()->back()->with('success',"Vous avez bien supprimé un album");
    }

    public function update($id, Request $request)
    {
        $this->g->updateGallery($id, $request['img'], $request['legende']);

        return redirect()->back()->with('success',"Vous avez bien modifié l'image de la galérie");
    }

    //administration

    public function listGalleryAdmin(Request $request)
    {
        return view('admin.gallerie.listGallerie',[
            'gallery' => $this->g->getGallery(true, $request)
        ]);
    }


    function deleteGallery($id)
    {
        $this->g->deleteGallery($id);

        return redirect()->back()->with('success',"Vous avez bien supprimé une image.");
    }

    public function addGalleryAdmin()
    {
        return view('admin.gallerie.addGallerie',[
            'edit' => false,
            "album" => $this->g->getAlbum(true)
        ]);
    }


    function validGallery(GalleryRequest $request)
    {
        if($request->hasfile('img'))

         {

            foreach($request->file('img') as $file)
            {

                $name=$file->getClientOriginalName(); 

                $data[] = $name;  

                $file->move("assets/img/galeries", $name);

            }
            //dd(json_encode($data));
            $request->img = $data;

         }

        $this->g->createGallery($request);

        return redirect()->back()->with('success',"Vous avez bien ajouté des images.");
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
        return view('site.galerie.album',[
            "album" => $this->g->getAlbum(false)
        ]);
    }


    public function createAlbum()
    {
        return view('admin.gallerie.createAlbum',[
            "album" => $this->g->getAlbum(true)
        ]);
    }


    public function validAlbum(Request $request)
    {
        $this->validate(request(), [
            'libelle' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $request->img = $request->file('img')->getClientOriginalName();
        $this->sv->saveImg($request, '/albums/covers', 'img');
        $this->g->createAlbum($request);

        return back()->with('success', "Vous avez bien ajouté un nouvel album");
    }

}

<?php


namespace App\Repository;

use App\Gallery;
use App\Album;

class GalleryRepository
{
    private $g;

    public function __construct(Gallery $g, Album $alb)
    {
        $this->g = $g;
        $this->alb = $alb;
    }

    public function getGallery($is_admin, $array)
    {
        if(!$is_admin)
        {
            return $this->g->newQuery()
                ->select()
                ->where('is_active', true)
                ->where('album_id',$array->folder)
                ->limit(10)
                ->orderBy('id','DESC')
                ->get();

        }else{
            return $this->g->newQuery()
                ->select()
                ->where('album_id',$array->folder)
                ->orderBy('id','DESC')
                ->get();
        }


    }

    public function enableOrDisableGalleryImage($id, $enable)
    {

        $a = $this->g->newQuery()->select()->where('id',$id);

        if($enable){

            $a->update([
                'is_active' => false
            ]);


        }else{

            $a->update([
                'is_active' => true
            ]);
        }

    }


    public function enableOrDisableAlbum($id, $enable)
    {

        $a = $this->alb->newQuery()->select()->where('id',$id);

        if($enable){

            $a->update([
                'is_active' => false
            ]);


        }else{

            $a->update([
                'is_active' => true
            ]);
        }

    }

    public function deleteGallery($id)
    {
        $ga = $this->g->newQuery()->findOrFail($id);

        $ga->delete();
    }

    public function createGallery($array)
    {
        foreach($array->img as $i){
            $this->g->newQuery()->create([
                'img' => $i,
                'album_id' => $array->album
            ]);
        }

    }

    public function updateGallery($id, $array)
    {
        $ga = $this->g->newQuery()->findOrFail($id);

        $ga->update([
            'img' => $array->img,
            'album_id' => $array->album
        ]);
    }


    public function getAlbum($id_admin){

        if($id_admin){
            return $this->alb->newQuery()->select()->orderBy('libelle','ASC')->get();
        }else{
            return $this->alb->newQuery()->select()->where('is_active',true)->orderBy('libelle','ASC')->get();
        }
        
    }


    public function createAlbum($array)
    {
        $this->alb->newQuery()->create([
            'libelle' => $array->libelle
        ]);
    }


    public function deleteAlbum($id)
    {
        $ga = $this->alb->newQuery()->findOrFail($id);

        $ga->delete();
    }
}

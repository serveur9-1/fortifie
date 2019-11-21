<?php


namespace App\Repository;

use App\Gallery;

class GalleryRepository
{
    private $g;

    public function __construct(Gallery $g)
    {
        $this->g = $g;
    }

    public function getGallery($is_admin)
    {
        if(!$is_admin)
        {
            return $this->g->newQuery()
                ->select()
                ->where('is_active', true)
                ->limit(10)
                ->orderBy('id','DESC')
                ->get();
        }else{
            return $this->g->newQuery()
                ->select()
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

    public function deleteGallery($id)
    {
        $ga = $this->g->newQuery()->findOrFail($id);

        $ga->delete();
    }

    public function createGallery($array)
    {
        $this->g->newQuery()->create([
            'img' => $array->img,
            'legende' => $array->legende
        ]);
    }

    public function updateGallery($id, $array)
    {
        $ga = $this->g->newQuery()->findOrFail($id);

        $ga->update([
            'img' => $array->img,
            'legende' => $array->legende
        ]);
    }
}

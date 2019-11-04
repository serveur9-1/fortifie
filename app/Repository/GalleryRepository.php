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

    public function getGallery()
    {
        return $this->g->newQuery()
            ->select()
            ->limit(10)
            ->orderBy('id','DESC')
            ->get();

    }

    public function deleteGallery($id)
    {
        $ga = $this->g->newQuery()->findOrFail($id);

        $ga->delete();
    }

    public function updateGallery($id, $img, $legende)
    {
        $ga = $this->g->newQuery()->findOrFail($id);

        $ga->update([
            'img' => $img,
            'legende' => $legende
        ]);
    }
}

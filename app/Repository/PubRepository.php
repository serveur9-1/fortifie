<?php


namespace App\Repository;

use App\Gallery;
use App\Pub;

class PubRepository
{
    private $p;

    public function __construct(Pub $p)
    {
        $this->p = $p;
    }

    public function getPub()
    {
        return $this->p->newQuery()
            ->select()
            ->orderBy('id','DESC')
            ->get();

    }


    public function deletePub($id)
    {
        $ga = $this->p->newQuery()->findOrFail($id);

        $ga->delete();
    }

    public function updatePub($id, $img, $url, $is_active, $is_banner, $debut, $fin)
    {
        $ga = $this->p->newQuery()->findOrFail($id);

        $ga->update([
            'img' => $img,
            'url' => $url,
            'is_active' => $is_active,
            'is_banner' => $is_banner,
            'debut' => $debut,
            'fin' => $fin
        ]);
    }
}

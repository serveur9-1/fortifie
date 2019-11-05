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

    public function updatePub($id, $array)
    {
        $ga = $this->p->newQuery()->findOrFail($id);

        $ga->update([
            'img' => $array['img'],
            'url' => $array['url'],
            'is_active' => $array['is_active'],
            'is_banner' => $array['is_banner'],
            'debut' => $array['debut'],
            'fin' => $array['fin']
        ]);
    }
}

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

    public function getBannerPub()
    {
        return $this->p->newQuery()
            ->select()
            ->where('is_banner', true)
            ->orderBy('id','DESC')
            ->get();

    }


    public function enableOrdisablePub($id, $enable)
    {

        $a = $this->p->newQuery()->select()->where('id',$id);

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

    public function createPub($array)
    {
        if($array->is_banner == "on"){
            $array->is_banner = true;
        }else{
            $array->is_banner = false;
        }
        $this->p->newQuery()->create([
            'img' => $array->img,
            'url' => $array->url,
            'is_banner' => $array->is_banner,
            'debut' => $array->debut,
            'fin' => $array->fin
        ]);
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
            'img' => $array->img,
            'url' => $array->url,
            'debut' => $array->debut,
            'is_banner' => $array->is_banner,
            'fin' => $array->fin
        ]);
    }
}

<?php


namespace App\Repository;


use App\Ville;

class VilleRepository
{
    private $v;

    public function __construct(Ville $v)
    {
        $this->v = $v;
    }




    public function getVille()
    {
        return $this->v->newQuery()->select()->distinct()->orderBy('libelle','ASC')->get();
    }



    public function deleteVille($id)
    {
        $v = $this->v->newQuery()->findOrFail($id);

        $v->delete();
    }


    public function createVille($array)
    {
        $this->v->newQuery()->create([
            'libelle' => $array['libelle'],
            'diocese_id' => $array['diocese_id']
        ]);
    }

    public function updateVille($id, $array)
    {
        $v = $this->v->newQuery()->findOrFail($id);

        $v->update([
            'libelle' => $array['libelle'],
            'diocese_id' => $array['diocese_id']
        ]);
    }





}

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
        return $this->v->newQuery()->select()->orderBy('libelle','ASC')->get();
    }



    public function deleteVille($id)
    {
        $v = $this->v->newQuery()->findOrFail($id);

        $v->delete();
    }


    public function updateVille($id, $array)
    {
        $v = $this->v->newQuery()->findOrFail($id);

        $v->update([
            'libelle' => $array['libelle']
        ]);
    }





}

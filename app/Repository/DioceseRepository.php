<?php


namespace App\Repository;


use App\Diocese;
use App\Paroisse;

class DioceseRepository
{
    private $d;

    public function __construct(Diocese $d)
    {
        $this->d = $d;
    }


    public function getDiocese()
    {
        return $this->d->newQuery()->select()->orderBy('nom','ASC')->get();
    }


    public function deleteDiocese($id)
    {
        $dio = $this->d->newQuery()->findOrFail($id);

        $dio->delete();
    }


    public function createDiocese($array)
    {
        $this->d->newQuery()->create([
            'nom' => $array['nom'],
            'ville_id' => $array['ville']
        ]);

    }


    public function updateDiocese($id, $array)
    {
        $pa = $this->d->newQuery()->findOrFail($id);

        $pa->update([
            'nom' => $array['nom'],
            'ville_id' => $array['ville']
        ]);
    }






}

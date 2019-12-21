<?php


namespace App\Repository;


use App\Paroisse;
use Illuminate\Auth\AuthManager;

class ParoisseRepository
{
    private $p;

    public function __construct(Paroisse $p)
    {
        $this->p = $p;
    }


    public function getParoisse()
    {
        return $this->p->newQuery()->select()->distinct()->orderBy('nom','ASC')->get();
    }


    public function deleteParoisse($id)
    {
        $paroisse = $this->p->newQuery()->findOrFail($id);

        $paroisse->delete();
    }


    public function createParoisse($array)
    {
        $this->p->newQuery()->create([
            'nom' => $array->nom,
            'telephone' => $array->telephone,
            'fixe' => $array->fixe,
            'email' => $array->email,
            'ville_id' => $array->ville_id
        ]);
    }


    public function updateParoisse($id, $array)
    {
        $pa = $this->p->newQuery()->findOrFail($id);

        $pa->update([
            'nom' => $array->nom,
            'telephone' => $array->telephone,
            'fixe' => $array->fixe,
            'email' => $array->email,
            'ville_id' => $array->ville_id
        ]);
    }

}

<?php


namespace App\Repository;


use App\Partenaire;
use Illuminate\Auth\AuthManager;

class PartenaireRepository
{
    private $p;

    public function __construct(Partenaire $p)
    {
        $this->p = $p;
    }


    public function getPartenaire()
    {
        return $this->p->newQuery()->select()->orderBy('nom','ASC')->get();
    }

    public function deletePartenaire($id)
    {
        $p = $this->p->newQuery()->findOrFail($id);

        $p->delete();
    }


    public function createPartenaire($array)
    {
        $this->p->newQuery()->create([
            'nom' => $array->nom,
            'url' => $array->url,
            'logo' => $array->logo
        ]);
    }

    public function updatePartenaire($id, $array)
    {
        $pa = $this->p->newQuery()->findOrFail($id);

        $pa->update([
            'nom' => $array->nom,
            'url' => $array->url,
            'logo' => $array->logo
        ]);
    }





}

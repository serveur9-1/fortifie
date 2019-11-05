<?php


namespace App\Repository;


use App\Config;

class ConfigRepository
{
    private $c;

    public function __construct(Config $c)
    {
        $this->c = $c;
    }




    public function getAllConfig()
    {
        return $this->c->newQuery()->first()->get();
    }


    public function updateConfig($id, $array)
    {
        $v = $this->c->newQuery()->findOrFail($id);

        $v->update([
            'telephone' => $array['telephone'],
            'email' => $array['email'],
            'localite' => $array['localite']
        ]);
    }




}

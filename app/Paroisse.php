<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paroisse extends Model
{
    protected $fillable = ['nom', 'telephone', 'fixe', 'email', 'ville_id'];

    public function ville()
    {
        return $this->belongsTo('App\Ville');
    }

    public function gestionnaire()
    {
        return $this->belongsToMany('App\Gestionnaire');
    }


    public function article()
    {
        return $this->hasMany('App\Article');
    }
}

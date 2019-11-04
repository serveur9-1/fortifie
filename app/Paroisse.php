<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paroisse extends Model
{
    protected $fillable = ['nom', 'telephone', 'fixe', 'email'];

    public function diocese()
    {
        return $this->belongsTo('App\Diocese');
    }

    public function gestionnaire()
    {
        return $this->belongsToMany('App\Gestionnaire');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $fillable = ['libelle','diocese_id'];

    public function diocese()
    {
        return $this->belongsTo('App\Diocese');
    }

    public function paroisse()
    {
        return $this->hasMany('App\Ville');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diocese extends Model
{
    protected $fillable = ['nom', 'ville_id'];

    public function paroisse()
    {
        return $this->hasMany('App\Paroisse');
    }

    public function ville()
    {
        return $this->belongsTo('App\Ville');
    }
}

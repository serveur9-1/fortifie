<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diocese extends Model
{
    protected $fillable = ['nom'];

    public function ville()
    {
        return $this->hasMany('App\Ville');
    }
}

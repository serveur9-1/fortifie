<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diocese extends Model
{
    protected $fillable = ['nom'];

    public function paroisse()
    {
        return $this->hasMany('App\Paroisse');
    }
}

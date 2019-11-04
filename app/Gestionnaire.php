<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestionnaire extends Model
{
    protected $fillable = ['communaute', 'telephone'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function paroisse()
    {
        return $this->belongsToMany('App\Paroisse');
    }
}

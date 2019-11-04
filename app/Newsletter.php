<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = ['email'];

    public function category()
    {
        return $this->belongsToMany('App\Category');
    }
}

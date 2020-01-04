<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = ['email_suscriber'];

    public function category()
    {
        return $this->belongsToMany('App\Category');
    }
}

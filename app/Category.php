<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'libelle',
        'img'
    ];

    public function article()
    {
        return $this->hasMany('App\Article');
    }

    public function newsletter()
    {
        return $this->belongsToMany('App\Newsletter');
    }
}

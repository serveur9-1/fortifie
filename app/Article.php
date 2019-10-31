<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'titre',
        'is_active',
        'img',
        'debut',
        'fin'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function diocese()
    {
        return $this->belongsTo('App\Diocese');
    }

    public function visiteur()
    {
        return $this->hasMany('App\Visiteur');
    }

}

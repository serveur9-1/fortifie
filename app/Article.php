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
}

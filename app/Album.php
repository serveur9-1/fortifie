<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'libelle',
        'is_active',
        'img'
    ];
    
    public function gallery(){
        return $this->hasMany('App\Gallery');
    }
}

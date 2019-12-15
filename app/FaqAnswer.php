<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqAnswer extends Model
{
    protected $fillable = ['libelle'];

    public function question()
    {
        return $this->belongsToMany('App\FaqQuestion');
    }
    
}

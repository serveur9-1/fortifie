<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqSection extends Model
{
    protected $fillable = ['libelle'];

    public function question()
    {
        return $this->hasMany('App\FaqQuestion');
    }

    
}



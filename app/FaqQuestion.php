<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqQuestion extends Model
{
    protected $fillable = ['libelle', 'faq_section_id'];


    public function section()
    {
        return $this->belongsTo('App\FaqSection');
    }

    public function answer()
    {
        return $this->belongsToMany('App\FaqAnswer');
    }

    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ['libelle', 'category_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}

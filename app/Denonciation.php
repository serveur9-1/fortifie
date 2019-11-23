<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denonciation extends Model
{
    protected $fillable = [
        'motif',
        'article_id'
    ];


    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}

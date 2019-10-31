<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model
{
    protected $fillable = ['ip', 'article_id'];

    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}

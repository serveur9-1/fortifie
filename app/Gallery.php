<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['img', 'album_id'];

    public function album()
    {
        return $this->belongsTo('App\Album');
    }
}

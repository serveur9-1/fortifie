<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestionnaire extends Model
{
    protected $fillable = ['communaute', 'telephone', 'user_id', 'communaute_id', 'paroisse_id'];

/*    public function user()
    {
        return $this->belongsTo('App\User');
    }*/

    public function paroisse()
    {
        return $this->belongsTo('App\Paroisse');
    }
}

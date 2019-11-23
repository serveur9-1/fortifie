<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'titre',
        'is_active',
        'description',
        'category_id',
        'paroisse_id',
        'user_id',
        'contact_telephone',
        'contact_email',
        'contact_fixe',
        'img',
        'sans_titre',
        'debut',
        'fin',
        'heure_debut',
        'heure_fin'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function diocese()
    {
        return $this->belongsTo('App\Diocese');
    }

    public function paroisse()
    {
        return $this->belongsTo('App\Paroisse');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function visiteur()
    {
        return $this->hasMany('App\Visiteur');
    }

}

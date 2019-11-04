<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pub extends Model
{
    protected $fillable = ['img', 'url', 'is_active', 'is_banner', 'debut','fin'];
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function configuration()
    {
        return view('admin.configuration.configuration');
    }

}

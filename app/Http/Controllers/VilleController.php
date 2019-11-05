<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VilleController extends Controller
{
     public function listVille()
    {
        return view('admin.ville.listVille');
    }

    public function addVille()
    {
        return view('admin.ville.addVille');
    }
}

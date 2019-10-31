<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function profil()
    {
        return view('site.Users.profil',[
        
        ]);
    }

    public function modify()
    {
        return view('site.Users.modify',[
        
        ]);
    }
}

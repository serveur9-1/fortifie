<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

use App\Config;

class ConfigController extends Controller
{
    public function configuration()
    {
        return view('admin.configuration.configuration',[
            'conf' => Config::all()
        ]);
    }

    public function valid(Request $request)
    {
        $this->validate(request(), [
            'telephone' => 'required | min:8 | max:8',
            'email' => 'email|required',
            'localite' => 'required',
            'description' => 'required',
        ]);

        $c = new Config();

        //Vider la table ici

        $c->newQuery()->delete();

        $c->newQuery()->create([
            'telephone' => $request->telephone,
            'email' => $request->email,
            'localite' => $request->localite,
            'description' => $request->description,
        ]);

        return redirect()->back()->withSuccess("Vous avez bien configuré la page contact");
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartenaireController extends Controller
{
    public function listPartner()
	{
		return view('admin.partenaire.listPartner');
	}

	  public function addPartner()
	{
		return view('admin.partenaire.addPartner');
	}
}

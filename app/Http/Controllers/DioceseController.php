<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DioceseController extends Controller
{
    public function listDiocese()
	{
		return view('admin.diocese.listDiocese');
	}

	  public function addDiocese()
	{
		return view('admin.diocese.addDiocese');
	}
}

<?php

namespace App\Http\Controllers;

use App\Repository\CategoryRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $r;

    public function __construct(CategoryRepository $r)
    {
        $this->r = $r;
    }

/*    public function index()
    {
        return view('site.index');
    }*/

    public function index()
    {
        return view('site.index', [
            'category' => $this->r->getCategory()
        ]);
    }

}

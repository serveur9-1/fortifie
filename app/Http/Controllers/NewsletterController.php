<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterRequest;
use App\Repository\NewsletterRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    private $new;

    public function __construct(NewsletterRepository $n)
    {
        $this->new = $n;
    }

    public function suscribe(NewsletterRequest $request)
    {
        $this->new->suscribeTo($request['email']);

        return redirect()->back()->with('success','Vous êtes maintenant abonné à la newsletter.');
        //dd($request['email']);
    }

    public function unsuscribe(Request $request)
    {
        //http://127.0.0.1:8000/unsuscribe?c=1&e=alexis.yoboue%40uvci.edu.ci
        // encrypt and decrypt

        $email = $request['e'];
        $category_id = $request['c'];

        $this->new->unsuscribeTo($email, $category_id);

        return 'ok' /*redirect('/')->with('success','Vous êtes maintenant désabonné à la catégorie.')*/;
    }

    //administration
    public function newslettersAdmin()
    {
        return view('admin.newsletter.newsletters');
    }
}


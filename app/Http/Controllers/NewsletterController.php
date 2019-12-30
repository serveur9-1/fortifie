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
        $this->new->suscribeTo($request);

        return redirect()->back()->with('success','Vous venez de vous inscrire au service Alerte.');
        //dd($request['email']);
    }

    public function unsuscribe(Request $request)
    {
        $email = $request['e'];
        $category_id = $request['c'];

        $this->new->unsuscribeTo($email, $category_id);

        return redirect('home')->with('success','Vous êtes maintenant désabonné à la catégorie.');
    }

    public function newsletterMail()
    {
        return view('emails.newsletter');
    }

    //administration
    public function newslettersAdmin()
    {
        return view('admin.newsletter.newsletters',[
            'newsletter' => $this->new->getNewsletterSuscriber()
        ]);
    }

    public function deleteNewsletter($id)
    {
        $this->new->deleteNewsletterSuscriber($id);

        return redirect()->back()->with('success',"Vous vez bien supprimé un abonné newsletter.");
    }
}


<?php

namespace App\Http\Controllers;


use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Repository\ConfigRepository;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __construct(ConfigRepository $c)
    {
        $this->c =  $c;
    }

    public function contact()
	{
		return view('site.contact.contact', ['config' => $this->c->getAllConfig()]);
	}


	public function sendContactMail(ContactRequest $request)
    {
        $request->email = "contact@fortifietoi.ci";
        Mail::send(new ContactMail($request));

        return redirect()->back()->with('success','Merci. Votre message a bien été envoyé. Votre demande ou votre préoccupation sera pris en compte dans les plus brefs délais.');
    }


    public function contactme()
    {
        return view('emails.contact');
    }

    
}

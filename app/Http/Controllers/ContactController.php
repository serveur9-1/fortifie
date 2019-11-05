<?php

namespace App\Http\Controllers;


use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
	{
		return view('site.contact.contact');
	}


	public function sendContactMail(ContactRequest $request)
    {
        $request->email = "contact@fortifietoi.ci";
        Mail::send(new ContactMail($request));

        return redirect()->back()->with('success','Votre message a bien été envoyé.');
    }
}

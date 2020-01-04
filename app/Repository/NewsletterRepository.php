<?php


namespace App\Repository;


use App\Category;
use App\Newsletter;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Arr;

use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterSuscribedMail;

class NewsletterRepository
{
    private $n;
    private $c;

    public function __construct(Newsletter $n, Category $c)
    {
        $this->n = $n;
        $this->c = $c;
    }





    public function suscribeTo($data)
    {
        $cat = $this->c->newQuery()->select('id')->get();
        //dd(Arr::flatten($cat->toArray()));
        $s = $this->n->newQuery()
            ->create([
                'email_suscriber' => $data->email_suscriber
            ]);
        //A REVOIR PLUTARD ====================================

        $s->category()->sync(Arr::flatten($cat->toArray()));


        //Send Mail

        $data->subject ="Abonné au service Alerte";
        $data->receiver = $data->email_suscriber;

        Mail::send(new NewsletterSuscribedMail($data));
        
    }

    public function unsuscribeTo($email, $category_id)
    {
        $this->c->newQuery()->findOrFail($category_id);

        $n = new Newsletter();

        $newsletter = $n->newQuery()
            ->select()->where('email_suscriber',$email)->first();
        //dd($newsletter);

        $newsletter->category()->detach($category_id);

    }

    public function getNewsletterSuscriber()
    {
        return $this->n->newQuery()->select()->orderBy('id','DESC')->get();
    }

    public function deleteNewsletterSuscriber($id)
    {
        $nls = $this->n->newQuery()->findOrFail($id);

        $nls->delete();
    }

    public function sendNewsletterMail()
    {
        return true;
    }






}

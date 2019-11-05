<?php


namespace App\Repository;


use App\Category;
use App\Newsletter;
use Illuminate\Auth\AuthManager;
use Illuminate\Support\Arr;

class NewsletterRepository
{
    private $n;
    private $c;

    public function __construct(Newsletter $n, Category $c)
    {
        $this->n = $n;
        $this->c = $c;
    }





    public function suscribeTo($email)
    {
        $cat = $this->c->newQuery()->select('id')->get();
        //dd(Arr::flatten($cat->toArray()));
        $s = $this->n->newQuery()
            ->create([
                'email' => $email
            ]);
        //A REVOIR PLUTARD ====================================

        $s->category()->sync(Arr::flatten($cat->toArray()));
    }

    public function unsuscribeTo($email, $category_id)
    {
        $this->c->newQuery()->findOrFail($category_id);

        $n = new Newsletter();

        $newsletter = $n->newQuery()
            ->select()->where('email',$email)->first();
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

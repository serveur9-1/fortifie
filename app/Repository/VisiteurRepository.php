<?php


namespace App\Repository;


use App\Visiteur;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;

class VisiteurRepository
{
    private $v;

    public function __construct(Visiteur $v)
    {
        $this->v = $v;
    }

    public function visitedSite()
    {
        if(Request::session()->get('ip') == null)
        {
            $visiteur = $this->v->newQuery()->select()
                ->where('ip', bcrypt(Request::session()->get('ip')))
                ->whereDate('created_at', Carbon::now()->format('Y-m-d'))
                ->get();

            if($visiteur->count() < 1)
            {
                $this->v->newQuery()->create(['ip' => bcrypt(Request::session()->get('ip'))]);
                Request::session()->push('ip', Request::ip());
            }
        }
    }

    public function visitedArticle($article_id)
    {
        $visiteur = $this->v->newQuery()->select()
            ->where('ip', "$2y$10$2XmJ8.8FLhKEZtlnfVnQLeGBxIQRdntf3.M5mWOXSQ57CATeUgWo2"/*bcrypt(Request::session()->get('ip'))*/)
            ->where('article_id', $article_id)
            ->whereDate('created_at', Carbon::now()->format('Y-m-d'))
            ->get();

        if($visiteur->count() < 1)
        {
            //Request::session()->get('ip');
            $this->v->newQuery()->create([
                    'ip' => '$2y$10$2XmJ8.8FLhKEZtlnfVnQLeGBxIQRdntf3.M5mWOXSQ57CATeUgWo2',
                    'article_id' => $article_id
            ]);
        }
    }
}

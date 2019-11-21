<?php


namespace App\Repository;


use App\Visiteur;
use App\Article;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;

class VisiteurRepository
{
    private $v;

    public function __construct(Visiteur $v, Article $a)
    {
        $this->v = $v;
        $this->a = $a;
    }

    public function visitedSite()
    {
        if(Request::session()->get('ip') == null)
        {
            $visiteur = $this->v->newQuery()->select()
                ->where('ip', Request::ip())
                ->whereDate('created_at', Carbon::now()->format('Y-m-d'))
                ->get();

            if($visiteur->count() < 1)
            {
                $this->v->newQuery()->create(['ip' => Request::ip()]);
                Request::session()->push('ip', Request::ip());
            }
        }
    }

    public function visitedArticle($article_id)
    {

            $visiteur = $this->v->newQuery()->select()
                ->where('ip', Request::ip())
                ->where('article_id', $article_id)
                ->whereDate('created_at', Carbon::now()->format('Y-m-d'))
                ->get();

            if ($visiteur->count() < 1) {
                //Request::session()->get('ip');
                $this->v->newQuery()->create([
                    'ip' => Request::ip(),
                    'article_id' => $article_id
                ]);
            }
    }

    public function getAllVisitors()
    {
        return $this->v->newQuery()->select()->where('article_id',null)->get();
    }

    public function getVisitorData()
    {

        $data = $this->v->newQuery()->select(array(DB::raw("count(ip) as d, MONTH(created_at) AS m")))
            
            ->whereYear('created_at', Carbon::now()->format('Y'))
            ->groupBy("m")
            ->orderBy('m', 'ASC')
            ->get()->toArray();

        $data1 = $this->a->newQuery()->select(array(DB::raw("count(id) as d, MONTH(created_at) AS m")))
        
        ->whereYear('created_at', Carbon::now()->format('Y'))
        ->groupBy("m")
        ->orderBy('m', 'ASC')
        ->get()->toArray();    

            dd($data1);

        return $data;

        //dd($data);
    }



    public function getArticleData()
    {

        $data = $this->a->newQuery()->select(array(DB::raw("count(id) as d, MONTH(created_at) AS m")))
        
        ->whereYear('created_at', Carbon::now()->format('Y'))
        ->groupBy("m")
        ->orderBy('m', 'ASC')
        ->get()->toArray();    

        //dd($data1);

        return $data;

    }
}

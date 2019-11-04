<?php

namespace App\Providers;

use App\Category;
use App\Diocese;
use App\Partenaire;
use App\Pub;
use App\Repository\PubRepository;
use App\Visiteur;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $cat = new Category();
        $dio = new Diocese();
        $vi = new Visiteur();

        $pu = new Pub();

        view()->share([
            'category' => $cat->newQuery()->select()->orderBy('libelle')->get(),
           'diocese' => $dio->newQuery()->select()->orderBy('nom')->get(),
            'p_article' => $vi->newQuery()
                ->select(array(DB::raw('id, article_id, COUNT(id) as nb')))
                ->groupBy('id', 'article_id')
                ->orderBy('nb','DESC')
                ->limit(5)
                ->get(),
            'visiteur' => $vi->newQuery()
                ->select(array(DB::raw('id, article_id, COUNT(id) as nb')))
                ->groupBy('id', 'article_id')
                ->orderBy('nb','DESC')
                ->limit(3)
                ->get(),
            'g_pub' => $pu->newQuery()->select()
                ->where('is_active',true)
                ->whereDate('debut','<=', Carbon::now()->format('Y-m-d'))
                ->whereDate('fin','>=', Carbon::now()->format('Y-m-d'))->get(),
            'g_partenaire' => Partenaire::all()
        ]);
    }
}

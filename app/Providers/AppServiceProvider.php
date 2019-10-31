<?php

namespace App\Providers;

use App\Article;
use App\Category;
use App\Diocese;
use App\Repository\CategoryRepository;
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
                ->get()
        ]);
    }
}

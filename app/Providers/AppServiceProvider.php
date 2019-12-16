<?php

namespace App\Providers;

use App\Article;
use App\Category;
use App\Diocese;
use App\Partenaire;
use App\Pub;
use App\Repository\PubRepository;
use App\User;
use App\Visiteur;
use App\Denonciation;
use App\Album;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\Validator;

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
        Validator::extend('recaptcha', 'App\\Validators\\ReCaptcha@validate');

        Schema::defaultStringLength(191);
    
        $cat = new Category();
        $a = new Article();
        $dio = new Diocese();
        $vi = new Visiteur();
        $al = new Album();

        $den = new Denonciation();

        $dmd = new User();

        $pu = new Pub();

        view()->share([
            'category' => $cat->newQuery()->select()->orderBy('libelle')->get(),
            'diocese' => $dio->newQuery()->select()->orderBy('nom')->get(),
            'g_album' => $al->newQuery()->select()->limit(4)->get(),
            'p_article' => $vi->newQuery()
                ->select(array(DB::raw('article_id, COUNT(id) as nb')))
                ->where('article_id','!=', null)
                ->groupBy('article_id')
                ->orderBy('nb','DESC')
                ->limit(5)
                ->get(),
            'p_category' => $a->newQuery()->select(array(DB::raw('category_id, COUNT(id) as nb')))
                ->groupBy('category_id')
                ->orderBy('nb','DESC')
                ->limit(3)
                ->get(),
            'g_pub' => $pu->newQuery()->select()
                ->where('is_active',true)
                ->whereDate('debut','<=', Carbon::now()->format('Y-m-d'))
                ->whereDate('fin','>=', Carbon::now()->format('Y-m-d'))->get(),
            'g_partenaire' => Partenaire::all(),
            'new_account_today' => $dmd->newQuery()->select()->where('is_new',true)->whereDate("created_at", Carbon::now()->format("Y-m-d"))->get(),
            'new_post_today' => $a->newQuery()->select()->where('is_new',true)->where('is_active',false)->whereDate("created_at", Carbon::now()->format("Y-m-d"))->get(),
            'new_denonciation_today' => $den->newQuery()->select()->whereDate("created_at", Carbon::now()->format("Y-m-d"))->get(),
        ]);
     }
}

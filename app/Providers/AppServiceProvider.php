<?php

namespace App\Providers;

use App\Article;
use App\Category;
use App\Diocese;
use App\Repository\CategoryRepository;
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
        view()->share([
            'category' => Category::all(),
            'diocese' => Diocese::all(),
            'article' => Article::all()
        ]);
    }
}

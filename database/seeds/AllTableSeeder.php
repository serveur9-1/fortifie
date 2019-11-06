<?php

use App\Article;
use App\Category;
use App\Diocese;
use App\Gallery;
use App\Paroisse;
use App\Partenaire;
use App\Pub;
use App\User;
use App\Ville;
use App\Visiteur;
use Illuminate\Database\Seeder;

class AllTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,50)->create();
        factory(Ville::class, 50)->create();
        factory(Diocese::class,20)->create();
        factory(Paroisse::class, 40)->create();
        factory(Category::class,15)->create();
        factory(Article::class,20)->create();
        factory(Visiteur::class,300)->create();

        for($i = 0; $i<3; $i++)
        {
            $g = new Pub();
            $g->newQuery()->create([
                'debut' => '2019-11-01',
                'fin' => '2019-11-25',
                'url' => "https:www.google.com",
                'img' => "$i.jpg"
            ]);
        }

        for($i = 1; $i<6; $i++)
        {
            $g = new Partenaire();
            $g->newQuery()->create([
                'nom' => "enterprise $i",
                'url' => "https:www.google.com",
                'logo' => "$i.jpg"
            ]);
        }

        for($i = 1; $i<6; $i++)
        {
            $g = new Gallery();
            $g->newQuery()->create([
                'img' => "0$i.jpg",
                'legende' => "legende de l'image $i"
            ]);
        }
    }
}

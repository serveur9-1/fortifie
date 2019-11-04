<?php

use App\Partenaire;
use Illuminate\Database\Seeder;

class PartenairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i<6; $i++)
        {
            $g = new Partenaire();
            $g->newQuery()->create([
                'nom' => "enterprise $i",
                'url' => "https:www.google.com",
                'logo' => "$i.jpg"
            ]);
        }
    }
}

<?php

use App\Gallery;
use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
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
            $g = new Gallery();
            $g->newQuery()->create([
               'img' => "0$i.jpg",
                'legende' => "legende de l'image $i"
            ]);
        }
    }
}

<?php

use App\Visiteur;
use Illuminate\Database\Seeder;

class VisiteursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Visiteur::class,300)->create();
    }
}

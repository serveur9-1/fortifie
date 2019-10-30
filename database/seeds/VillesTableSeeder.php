<?php

use App\Ville;
use Illuminate\Database\Seeder;

class VillesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Ville::class, 50)->create();
    }
}

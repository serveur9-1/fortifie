<?php

use App\Diocese;
use Illuminate\Database\Seeder;

class DiocesesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Diocese::class,20)->create();
    }
}

<?php

use App\Pub;
use Illuminate\Database\Seeder;

class PubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}

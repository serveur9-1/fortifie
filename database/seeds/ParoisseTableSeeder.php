<?php

use App\Paroisse;
use Illuminate\Database\Seeder;

class ParoisseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Paroisse::class, 40)->create();
    }
}

<?php

use Illuminate\Database\Seeder;

class product extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        factory(App\Test::class, 2)->create();
    }
}
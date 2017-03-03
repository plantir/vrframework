<?php
use Illuminate\Database\Seeder;

class user extends Seeder
{
     public function run()
    {
        factory(App\Model\User::class, 2)->create();
    }
}
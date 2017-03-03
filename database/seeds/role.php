<?php

use Illuminate\Database\Seeder;

class role extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $roleArray = array("SuperUser","Admin","Registred","UnRegistred",);
        foreach($roleArray as $role){
            
            if (App\Model\Role::where('name', $role)->first() === null) {
                // user found
                App\Model\Role::create(array(
                    "name" => $role
                ));
            }
        }
    }
}
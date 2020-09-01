<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      $role= new Role();//object
      $role->name="Admin";
      $role->save();

      $role1= new Role();//object
      $role1->name="Customer";
      $role1->save();
    }
}

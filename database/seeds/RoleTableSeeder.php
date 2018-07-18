<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = "User";
        $role_user->save(); 

        $role_reviewer = new Role();
        $role_reviewer->name = "Reviewer";
        $role_reviewer->save();

        $role_contributor = new Role();
        $role_contributor->name = "Contributor";
        $role_contributor->save();

        $role_admin = new Role();
        $role_admin->name = "Admin";
        $role_admin->save(); 
    }
}

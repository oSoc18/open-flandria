<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'employee')->first();

        $user_admin = new User();
        $user_admin->name = "admin";
        $user_admin->email = "admin@flandria.be";
        $user_admin->password = Hash::make('adminpassword');
        $user_admin->verified = 1;
        $user_admin->save();
        $user_admin->roles()->attach($role_admin);
    }
}

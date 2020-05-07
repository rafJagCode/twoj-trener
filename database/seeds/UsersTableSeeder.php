<?php

use App\Roles;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Roles::where('name','Trainer')->first();
        $user = new User();
        $user->firstName='user';
        $user->secondName='username';
        $user->email='user@example@gmail.com';
        $user->city='city';
        $user->password=bcrypt('user');
        $user->roles()->attach($role);

        $user = new User();
        $user->firstName='user';
        $user->secondName='username';
        $user->email='user@example@gmail.com';
        $user->city='city';
        $user->password=bcrypt('user');
        $user->roles()->attach(2);

    }
}

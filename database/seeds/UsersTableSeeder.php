<?php

use App\Roles;
use App\User;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     * @return void
     */
    public function run()
    {
        $role = Roles::where('name', 'Trainer')->first();
        $user = new User();
        $user->firstName = 'user';
        $user->secondName = 'username';
        $user->email = 'user@example@gmail.com';
        $user->city = 'city';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($role);

        $user = new User();
        $user->firstName = 'user1';
        $user->secondName = 'username1';
        $user->email = 'user1@example@gmail.com';
        $user->city = 'city';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach(2);
    }
}

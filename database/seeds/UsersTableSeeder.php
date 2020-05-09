<?php

use App\Roles;
use App\User;
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
        $role = Roles::where('name', 'Trainer')->first();
        $user = new User();
        $user->firstName = 'Jan';
        $user->secondName = 'Kowalski';
        $user->email = 'Kowalski@gmail.com';
        $user->city = 'Olsztyn';
        $user->password = bcrypt('user');
        $user->save();
        $user->password = bcrypt('user');

        $user->roles()->attach($role);

        $user = new User();
        $user->firstName = 'Anna';
        $user->secondName = 'Kowalska';
        $user->email = 'kowalska@gmail.com';
        $user->city = 'Warszawa';
        $user->password = bcrypt('user1');
        $user->save();
        $user->roles()->attach(2);
    }
}

<?php

use App\Roles;
use App\User;
use App\Diets;
use App\Ratings;
use App\Gyms;
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
        $trainerRole = Roles::where('name', 'Trainer')->first();
        $userRole = Roles::where('name', 'User')->first();
        $justGym = Gyms::where('name', 'Just Gym')->first();
        $dietaWege= Diets::where('name','Wegetariańska')->first();

        $user = new User();
        $user->firstName = 'user1';
        $user->secondName = 'username';
        $user->email = 'user1@gmail.com';
        $user->city = 'city';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($trainerRole);
        for ($i = 1; $i < 4; $i++)
            $user->ratings()->attach($i);
        $user->gyms()->attach($justGym);

        $user = new User();
        $user->firstName = 'user2';
        $user->secondName = 'username';
        $user->email = 'user2@example@gmail.com';
        $user->city = 'city';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($userRole);
        $user->gyms()->attach($justGym);
        $user->diets()->attach($dietaWege);

        $user = new User();
        $user->firstName = 'user3';
        $user->secondName = 'username';
        $user->email = 'user3@example@gmail.com';
        $user->city = 'city';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($userRole);
        $user->gyms()->attach($justGym);
        $user->diets()->attach($dietaWege);

    }
}

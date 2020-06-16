<?php

use App\Models\Roles;
use App\Models\User;
use App\Models\Diets;
use App\Models\Gyms;
use App\Models\Ratings;

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
        $user = new User();
        $user->firstName = 'Jan';
        $user->secondName = 'Kowalski';
        $user->email = 'Kowalski@gmail.com';
        $user->city = 'Olsztyn';
        $user->description="hdgashjdgasghfjagshfsjvjaskjfsgadfkghaskdgfkasghfkasfasf";
        $user->phoneNumber = '787123644';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach(1);

        $user = new User();
        $user->firstName = 'Kamil';
        $user->secondName = 'Stalski';
        $user->email = 'Stalski@gmail.com';
        $user->city = 'Olsztyn';
        $user->description="hdgashjdgasghfjagshfsjvjaskjfsgadfkghaskdgfkasghfkasfasf";
        $user->phoneNumber = '787123644';
        $user->password = bcrypt('user123');
        $user->save();
        $user->roles()->attach(1);

        $user = new User();
        $user->firstName = 'Anna';
        $user->secondName = 'Kowalska';
        $user->email = 'kowalska@gmail.com';
        $user->city = 'Warszawa';
        $user->phoneNumber = '787123642';
        $user->password = bcrypt('user1');
        $user->save();
        $user->roles()->attach(2);

        $trainerRole = Roles::where('name', 'Trainer')->first();
        $userRole = Roles::where('name', 'User')->first();
        $justGym = Gyms::where('name', 'Just Gym')->first();
        $dietaWege = Diets::where('name', 'Wegetariańska')->first();

        $user = new User();
        $user->firstName = 'Hrabia';
        $user->secondName = 'Potocki';
        $user->email = 'user1@gmail.com';
        $user->city = 'Gdańsk';
        $user->phoneNumber = '787173642';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($trainerRole);
        for ($i = 1; $i < 4; $i++)
            $user->ratings()->attach($i);
        $user->gyms()->attach($justGym);

        $user = new User();
        $user->firstName = 'Angelina';
        $user->secondName = 'Marecka';
        $user->email = 'user2@example@gmail.com';
        $user->city = 'Gdańsk';
        $user->phoneNumber = '787123649';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($userRole);
        $user->gyms()->attach($justGym);
        $user->diets()->attach($dietaWege);

        $user = new User();
        $user->firstName = 'Blażej';
        $user->secondName = 'Komarenko';
        $user->email = 'user3@example@gmail.com';
        $user->city = 'Warszawa';
        $user->phoneNumber = '787123645';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($userRole);
        $user->gyms()->attach($justGym);
        $user->diets()->attach($dietaWege);
    }
}

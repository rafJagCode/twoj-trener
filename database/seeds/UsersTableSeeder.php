<?php

use App\Models\Roles;
use App\Models\User;
use App\Models\Diets;
use App\Models\Dysciplines;
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
        $user->firstName = 'Anna';
        $user->secondName = 'Kowalska';
        $user->email = 'kowalska@gmail.com';
        $user->city = 'Warszawa';
        $user->phoneNumber = '787 123 642';
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
        $user->description = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
        $user->phoneNumber = '787 173 642';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($trainerRole);
        for ($i = 1; $i <= 4; $i++)
            $user->ratings()->attach($i);
            // $user->ratings()->attach(2);
        $user->gyms()->attach($justGym);
        for ($j = 1; $j <= 5; $j++)
            $user->disciplines()->attach($j);

        $user = new User();
        $user->firstName = 'Bogusław';
        $user->secondName = 'Linda';
        $user->email = 'blinda@gmail.com';
        $user->city = 'Gdańsk';
        $user->phoneNumber = '717 373 642';
        $user->description = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($trainerRole);
        for ($i = 1; $i <= 6; $i++)
            $user->ratings()->attach($i);
        // $user->ratings()->attach($rating1);
        $user->gyms()->attach($justGym);
        for ($j = 1; $j <= 7; $j++)
            $user->disciplines()->attach($j);

        $user = new User();
        $user->firstName = 'Maciej';
        $user->secondName = 'Kot';
        $user->email = 'mkot@gmail.com';
        $user->city = 'Olsztyn';
        $user->phoneNumber = '589 373 442';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($trainerRole);
        for ($i = 1; $i <= 2; $i++)
            $user->ratings()->attach($i);
        // $user->ratings()->attach($rating1);
        $user->gyms()->attach($justGym);
        for ($j = 1; $j <= 6; $j++)
            $user->disciplines()->attach($j);

        $user = new User();
        $user->firstName = 'Jan';
        $user->secondName = 'Kowalski';
        $user->email = 'kowalski@gmail.com';
        $user->city = 'Olsztyn';
        $user->phoneNumber = '787 123 644';
        $user->description = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($trainerRole);
        for ($i = 1; $i <= 7; $i++)
            $user->ratings()->attach($i);
        // $user->ratings()->attach($rating3);
        $user->gyms()->attach($justGym);

        $user = new User();
        $user->firstName = 'Kamil';
        $user->secondName = 'Stalski';
        $user->email = 'stalski@gmail.com';
        $user->city = 'Olsztyn';
        $user->description = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
        $user->phoneNumber = '787 123 644';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($trainerRole);
        $user->gyms()->attach($justGym);

        $user = new User();
        $user->firstName = 'Ewelina';
        $user->secondName = 'Dobon';
        $user->email = 'edobon@gmail.com';
        $user->city = 'Olsztyn';
        $user->phoneNumber = '607 983 644';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($trainerRole);
        for ($i = 1; $i <= 4; $i++)
            $user->ratings()->attach($i);
        // $user->ratings()->attach($rating3);
        $user->gyms()->attach($justGym);

        $user = new User();
        $user->firstName = 'Martyna';
        $user->secondName = 'Pitko';
        $user->email = 'mpitko@gmail.com';
        $user->city = 'Gdańsk';
        $user->phoneNumber = '547 283 644';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($trainerRole);
        $user->gyms()->attach($justGym);
        for ($j = 1; $j <= 5; $j++)
            $user->disciplines()->attach($j);

        $user = new User();
        $user->firstName = 'Andrzej';
        $user->secondName = 'Krot';
        $user->email = 'akrot@gmail.com';
        $user->city = 'Olsztyn';
        $user->phoneNumber = '666 283 644';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($trainerRole);
        $user->gyms()->attach($justGym);

        $user = new User();
        $user->firstName = 'Angelina';
        $user->secondName = 'Marecka';
        $user->email = 'user2@example@gmail.com';
        $user->city = 'Gdańsk';
        $user->phoneNumber = '787 123 649';
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
        $user->phoneNumber = '787 123 645';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($userRole);
        $user->gyms()->attach($justGym);
        $user->diets()->attach($dietaWege);
    }
}

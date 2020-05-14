<?php

use App\RolesHasUsers;
use Illuminate\Database\Seeder;
use App\Diets;
use App\Ratings;
use App\Roles;
use App\Gyms;
use App\Dysciplines;
use app\Cities;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DietsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(RatingsTableSeeder::class);
        $this->call(DysciplinesTableSeeder::class);
        $this->call(GymsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

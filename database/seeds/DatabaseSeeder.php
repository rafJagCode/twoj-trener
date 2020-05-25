<?php

use App\Models\RolesHasUsers;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
use App\Diets;
use App\Ratings;
use App\Roles;
use App\Gyms;
use App\Dysciplines;
=======
use App\Models\Diets;
use App\Models\Ratings;
use App\Models\Roles;
use App\Models\Gyms;
use App\Models\Dysciplines;
use app\Models\Cities;
>>>>>>> 7cbb99ea5cb6ab2c0bd89bf7d4319ef2bc90ad30


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
        $this->call(DysciplinesTableSeeder::class);
        $this->call(RatingsTableSeeder::class);
        $this->call(DysciplinesTableSeeder::class);
        $this->call(GymsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

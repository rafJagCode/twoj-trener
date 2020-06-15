<?php

use Illuminate\Database\Seeder;

use App\Models\Diets;
use App\Models\Ratings;
use App\Models\Roles;
use App\Models\Gyms;
use App\Models\Dysciplines;
use app\Models\Cities;


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
        $this->call(DysciplinesTableSeeder::class);
        $this->call(RatingsTableSeeder::class);
        $this->call(GymsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

<?php

use App\Models\Gyms;
use Illuminate\Database\Seeder;

class GymsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gyms= new Gyms();
        $gyms->name='Just Gym';
        $gyms->city='Olsztyn';
        $gyms->street='Tuwima 25';
        $gyms->save();

        $gyms= new Gyms();
        $gyms->name='Dynamic Fitness Club';
        $gyms->city='Olsztyn';
        $gyms->street='Tomasza Wilczyńskiego 29';
        $gyms->save();

        $gyms= new Gyms();
        $gyms->name='Kinetic Fitness Club';
        $gyms->city='Olsztyn';
        $gyms->street='Marszałka Józefa Piłdsudzkiego 44a';
        $gyms->save();

        $gyms= new Gyms();
        $gyms->name='Olimpia Fitness';
        $gyms->city='Olsztyn';
        $gyms->street='Potmistrza Wtolda Pileckiego 2';
        $gyms->save();
    }
}

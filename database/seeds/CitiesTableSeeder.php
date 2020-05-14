<?php

use Illuminate\Database\Seeder;
use App\Cities;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $city= new Cities();
        $city->name='Warszawa';
        $city->save();

        $city= new Cities();
        $city->name='Olsztyn';
        $city->save();

        $city= new Cities();
        $city->name='Kraków';
        $city->save();

        $city= new Cities();
        $city->name='Poznań';
        $city->save();

        $city= new Cities();
        $city->name='Gdańsk';
        $city->save();
    }
}

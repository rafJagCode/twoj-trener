<?php

use App\Models\Roles;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Roles();
        $role->name = 'Trainer';
        $role->save();

        $role = new Roles();
        $role->name='User';
        $role->save();

    }
}

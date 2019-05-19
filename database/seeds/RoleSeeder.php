<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * This will insert only two records 1 for the admin and 2 for the normal role
     *
     * @return void
     */
    public function run()
    {
        factory(App\Role::class)->create(['name' => 'admin']);
        factory(App\Role::class)->create(['name' => 'normal']);
    }
}

<?php

namespace Database\Seeders;

use CreateRolesPermissionsTable;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(PeopleSeeder::class);
        $this->call(StatusesSeeder::class);
        $this->call(BuildingSeeder::class);
        $this->call(RolePermissionSeeder::class);
    }
}

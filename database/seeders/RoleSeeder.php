<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = new Role();
        $manager->name = 'Администратор';
        $manager->slug = 'admin';
        $manager->save();
        $developer = new Role();
        $developer->name = 'Руководитель';
        $developer->slug = 'top-manager';
        $developer->save();
    }
}

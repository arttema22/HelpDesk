<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission1 = new Permission();
        $permission1->name = 'Управление правами';
        $permission1->slug = 'manage-permission';
        $permission1->save();

        $permission2 = new Permission();
        $permission2->name = 'Управление ролями';
        $permission2->slug = 'manage-role';
        $permission2->save();

        $permission3 = new Permission();
        $permission3->name = 'Управление пользователями';
        $permission3->slug = 'manage-user';
        $permission3->save();

        $permission4 = new Permission();
        $permission4->name = 'Управление услугами';
        $permission4->slug = 'manage-service';
        $permission4->save();

        $permission5 = new Permission();
        $permission5->name = 'Управление обращениями';
        $permission5->slug = 'manage-appeal';
        $permission5->save();

        $permission6 = new Permission();
        $permission6->name = 'Управление персонами';
        $permission6->slug = 'manage-person';
        $permission6->save();

        $permission7 = new Permission();
        $permission7->name = 'Управление объектами';
        $permission7->slug = 'manage-building';
        $permission7->save();
    }
}

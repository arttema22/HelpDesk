<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = Role::where('slug', 'manager')->first();
        $admin = Role::where('slug', 'admin')->first();
        //$createTasks = Permission::where('slug', 'create-tasks')->first();
        //$manageUsers = Permission::where('slug', 'manage-users')->first();

        $user1 = new User();
        $user1->first_name = 'Артем';
        $user1->last_name = 'Гусев';
        $user1->patronymic = 'Александрович';
        $user1->phone = '+79119268188';
        $user1->email = 'arttema@mail.ru';
        $user1->password = bcrypt('1234qwerQWER');
        $user1->save();
        $user1->roles()->attach($admin);
        //$user1->permissions()->attach($createTasks);

        $user2 = new User();
        $user2->first_name = 'Mike';
        $user2->last_name = 'Thomas';
        $user2->phone = '+79119268188';
        $user2->email = 'mike@thomas.com';
        $user2->password = bcrypt('1234qwerQWER');
        $user2->save();
        $user2->roles()->attach($manager);
        //$user2->permissions()->attach($manageUsers);
    }
}

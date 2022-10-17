<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\People;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $person1 = new People();
        $person1->created_at = '15-10-2022 11:00';
        $person1->updated_at = '15-10-2022 11:00';
        $person1->first_name = 'Александра';
        $person1->last_name = 'Елисеева';
        $person1->patronymic = 'Ивановна';
        $person1->phone = '+79522360416';
        $person1->email = 'elisei45@yandex.ru';
        $person1->save();

        $person2 = new People();
        $person2->created_at = '15-10-2022 11:00';
        $person2->updated_at = '15-10-2022 11:00';
        $person2->first_name = 'Виктор';
        $person2->last_name = 'Андреенко';
        $person2->patronymic = 'Андреевич';
        $person2->phone = '+79119359834';
        $person2->email = 'andreenko@yandex.ru';
        $person2->save();

        $person3 = new People();
        $person3->created_at = '15-10-2022 11:00';
        $person3->updated_at = '15-10-2022 11:00';
        $person3->first_name = 'Кирилл';
        $person3->last_name = 'Петров';
        $person3->patronymic = 'Борисович';
        $person3->phone = '+79219862112';
        $person3->email = 'Petrov-kfa@yandex.ru';
        $person3->save();

        $person4 = new People();
        $person4->created_at = '15-10-2022 11:00';
        $person4->updated_at = '15-10-2022 11:00';
        $person4->first_name = 'Алла';
        $person4->last_name = 'Гребенникова';
        $person4->patronymic = 'Викторовна';
        $person4->phone = '89217414219';
        $person4->email = 'luntik-alla@mail.ru';
        $person4->save();
    }
}

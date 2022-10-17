<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\Building;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $building1 = new Building();
        $building1->title = 'Гараж';
        $building1->ls = 1501184;
        $building1->address = 'ул Областная 3.Кудрово. Всевол.р-н Лен обл';
        $building1->save();

        $building2 = new Building();
        $building2->title = 'Квартира';
        $building2->ls = 1514830126;
        $building2->address = 'Ленинградская обл, р-н. Гатчинский, гп. Вырица, пр-кт. Урицкого, д. 139';
        $building2->save();

        $building3 = new Building();
        $building3->title = 'Дом';
        $building3->ls = 1501184;
        $building3->address = 'Ло, п. Бугры, Воронцовский бульвар, 9-2-489';
        $building3->save();

        $building4 = new Building();
        $building4->title = 'Квартира';
        $building4->ls = 1300731150;
        $building4->address = 'г.Всеволожск, ул. Боровая, д.14, кв.5';
        $building4->save();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service1 = new Service();
        $service1->name = 'Экспертиза документов на соответствие для заключения договора энергоснабжения/договора купли-продажи';
        $service1->save();
        $service2 = new Service();
        $service2->name = 'Экспертиза документов, предоставляемых для изменения Договора энергоснабжения/купли-продажи';
        $service2->save();
        $service3 = new Service();
        $service3->name = 'Экспертиза документации на приборы учета, установленные во вновь построенном многоквартирном доме';
        $service3->save();
        $service4 = new Service();
        $service4->name = 'Расчет прогнозной стоимости поставки электрической энергии и мощности';
        $service4->save();
        $service5 = new Service();
        $service5->name = 'Консультационные услуги по установке устройств защиты от дугового пробоя/искрения';
        $service5->save();
        $service6 = new Service();
        $service6->name = 'Установка/замена прибора учета электрической энергии';
        $service6->save();
        $service7 = new Service();
        $service7->name = 'Копирование документов';
        $service7->save();
        $service8 = new Service();
        $service8->name = 'Разработка проектной документации системы коммерческого учета электрической энергии';
        $service8->save();
    }
}

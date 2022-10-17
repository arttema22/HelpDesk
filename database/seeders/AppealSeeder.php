<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\Appeal;

class AppealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appeal1 = new Appeal();
        $appeal1->created_at = '15-10-2022 15:59';
        $appeal1->updated_at = '15-10-2022 15:59';
        $appeal1->people_id = 1;
        $appeal1->message = 'Заявление Прошу сделать замену пу эл\эн взамен пу вышедшего ранее из строя. №пу вышедшего ранее из строя 1501184, пу установлен на лестничной площадке . тел для связи 89522360416';
        $appeal1->source = 1;
        $appeal1->type = 0;
        $appeal1->save();

        $appeal2 = new Appeal();
        $appeal2->created_at = '15-10-2022 17:19';
        $appeal2->updated_at = '15-10-2022 17:19';
        $appeal2->people_id = 2;
        $appeal2->message = 'Подскажите пожалуйста порядок действий для увеличения подаваемой входной мощности в доме с 9 до 15 квт ? Лицевой счет 1514830126 Адрес абонента Вырица, Урицкого пр-кт, д. 139';
        $appeal2->source = 1;
        $appeal2->type = 0;
        $appeal2->save();

        $appeal3 = new Appeal();
        $appeal3->created_at = '15-10-2022 18:09';
        $appeal3->updated_at = '15-10-2022 18:09';
        $appeal3->people_id = 3;
        $appeal3->message = 'Здравствуйте. Являюсь собственником указанной квартиры. По указанному адресу есть задолженность оплаты электроэнергии. Назовите, пожалуйста, сумму задолженности и можно одну квитанцию на эту сумму? С учетом показаний, поданных в сентябре 2022 года, а именно: дневная - 2477, ночная - 1143.';
        $appeal3->source = 1;
        $appeal3->type = 0;
        $appeal3->save();

        $appeal4 = new Appeal();
        $appeal4->created_at = '15-10-2022 21:36';
        $appeal4->updated_at = '15-10-2022 21:36';
        $appeal4->people_id = 4;
        $appeal4->message = 'Здравствуйте! 27.09.2022 была замена старого эл.счетчика на электронный. № счетчика 9494666. Лиц/сч. 1300731150. Прошу подключить мне ночной тариф.';
        $appeal4->source = 1;
        $appeal4->type = 0;
        $appeal4->save();
    }
}

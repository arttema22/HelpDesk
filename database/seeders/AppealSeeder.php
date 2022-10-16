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
        $appeal1->name = 'Елисеева Александра Ивановна';
        $appeal1->address = 'ул Областная 3.Кудрово. Всевол.р-н Лен обл';
        $appeal1->phone = '+79522360416';
        $appeal1->email = 'elisei45@yandex.ru';
        $appeal1->message = 'Заявление Прошу сделать замену пу эл\эн взамен пу вышедшего ранее из строя. №пу вышедшего ранее из строя 1501184, пу установлен на лестничной площадке . тел для связи 89522360416';
        $appeal1->source = 1;
        $appeal1->save();

        $appeal2 = new Appeal();
        $appeal2->created_at = '15-10-2022 17:19';
        $appeal2->updated_at = '15-10-2022 17:19';
        $appeal2->name = 'Андреенко Виктор Андреевич';
        $appeal2->address = 'Ленинградская обл, р-н. Гатчинский, гп. Вырица, пр-кт. Урицкого, д. 139';
        $appeal2->phone = '+79119359834';
        $appeal2->email = 'andreenko@yandex.ru';
        $appeal2->message = 'Подскажите пожалуйста порядок действий для увеличения подаваемой входной мощности в доме с 9 до 15 квт ? Лицевой счет 1514830126 Адрес абонента Вырица, Урицкого пр-кт, д. 139';
        $appeal2->source = 1;
        $appeal2->save();

        $appeal3 = new Appeal();
        $appeal3->created_at = '15-10-2022 18:09';
        $appeal3->updated_at = '15-10-2022 18:09';
        $appeal3->name = 'Петров Кирилл Борисович';
        $appeal3->address = 'Ло, п. Бугры, Воронцовский бульвар, 9-2-489';
        $appeal3->phone = '+79219862112';
        $appeal3->email = 'Petrov-kfa@yandex.ru';
        $appeal3->message = 'Здравствуйте. Являюсь собственником указанной квартиры. По указанному адресу есть задолженность оплаты электроэнергии. Назовите, пожалуйста, сумму задолженности и можно одну квитанцию на эту сумму? С учетом показаний, поданных в сентябре 2022 года, а именно: дневная - 2477, ночная - 1143.';
        $appeal3->source = 1;
        $appeal3->save();

        $appeal4 = new Appeal();
        $appeal4->created_at = '15-10-2022 21:36';
        $appeal4->updated_at = '15-10-2022 21:36';
        $appeal4->name = 'Гребенникова Алла Викторовна';
        $appeal4->address = 'г.Всеволожск, ул. Боровая, д.14, кв.5';
        $appeal4->phone = '89217414219';
        $appeal4->email = 'luntik-alla@mail.ru';
        $appeal4->message = 'Здравствуйте! 27.09.2022 была замена старого эл.счетчика на электронный. № счетчика 9494666. Лиц/сч. 1300731150. Прошу подключить мне ночной тариф.';
        $appeal4->source = 1;
        $appeal4->save();
    }
}

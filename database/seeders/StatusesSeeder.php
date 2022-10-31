<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\Status;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status1 = new Status();
        $status1->title = 'Новое';
        $status1->save();

        $status2 = new Status();
        $status2->title = 'Дан ответ';
        $status2->save();

        $status3 = new Status();
        $status3->title = 'Закрыто';
        $status3->save();
    }
}

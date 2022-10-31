<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeContact;

class TypeContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type1 = new TypeContact();
        $type1->title = 'email';
        $type1->save();

        $type2 = new TypeContact();
        $type2->title = 'Звонок';
        $type2->save();
    }
}

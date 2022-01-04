<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new Type();
        $type->name = 'Pháp luật';
        $type->save();

        $type = new Type();
        $type->name = 'Kinh doanh';
        $type->save();

        $type = new Type();
        $type->name = 'Đời sống';
        $type->save();

        $type = new Type();
        $type->name = 'Sức khỏe';
        $type->save();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassAccSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_accs')->insert([
            'class' => 'Kiếm'
        ]);
        DB::table('class_accs')->insert([
            'class' => 'Tiêu'
        ]);
        DB::table('class_accs')->insert([
            'class' => 'Kunai'
        ]);
        DB::table('class_accs')->insert([
            'class' => 'Cung'
        ]);
        DB::table('class_accs')->insert([
            'class' => 'Đao'
        ]);      
        DB::table('class_accs')->insert([
            'class' => 'Quạt'
        ]);
    }
}
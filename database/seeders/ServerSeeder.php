<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servers')->insert([
            'sv_name' => 'Bokken'
        ]);
        DB::table('servers')->insert([
            'sv_name' => 'Shuriken'
        ]);
        DB::table('servers')->insert([
            'sv_name' => 'Tessen'
        ]);
        DB::table('servers')->insert([
            'sv_name' => 'Kunai'
        ]);
        DB::table('servers')->insert([
            'sv_name' => 'Katana'
        ]);
        DB::table('servers')->insert([
            'sv_name' => 'Tone'
        ]);
        DB::table('servers')->insert([
            'sv_name' => 'Sanzu'
        ]);
    }
}
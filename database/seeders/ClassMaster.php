<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassMaster extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_masters')->insert([
            'name' => 'Year 1',
        ]);
        DB::table('class_masters')->insert([
            'name' => 'Year 2',
        ]);
        DB::table('class_masters')->insert([
            'name' => 'Year 3',
        ]);
        DB::table('class_masters')->insert([
            'name' => 'Year 4',
        ]);
        DB::table('class_masters')->insert([
            'name' => 'Year 5',
        ]);
    }
}

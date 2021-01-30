<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Subject extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'name' => 'Math',
        ]);
        DB::table('subjects')->insert([
            'name' => 'English',
        ]);
        DB::table('subjects')->insert([
            'name' => 'Computer',
        ]);
        DB::table('subjects')->insert([
            'name' => 'Java',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@wallingtonacademy.co.uk',
            'email_verified_at' => now(),
            'password' => Hash::make('wallington'),
            'role' => User::ADMIN,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

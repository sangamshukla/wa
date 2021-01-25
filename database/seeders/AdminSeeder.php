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

        // DB::table('users')->insert([
        //     'name' => 'Student',
        //     'email' => 'student@wallingtonacademy.co.uk',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('wallington'),
        //     'role' => User::STUDENT,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        DB::table('users')->insert([
            'name' => 'Teacher',
            'email' => 'teacher@wallingtonacademy.co.uk',
            'email_verified_at' => now(),
            'password' => Hash::make('wallington'),
            'role' => User::TEACHER,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'operation',
            'email' => 'operation@wallingtonacademy.co.uk',
            'email_verified_at' => now(),
            'password' => Hash::make('wallington'),
            'role' => User::OPERATION,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

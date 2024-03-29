<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'Jaafar Alwahsh',
                'email' => 'jaafar@gmail.com',
                'password' => Hash::make('Password'),
                'type' => 'super admin'
            ],
            [
                'name' => 'Mohammad Alwahsh',
                'email' => 'mohammad@gmail.com',
                'password' => Hash::make('Password'),
                'type' => 'admin'
            ],
            [
                'name' => 'Ammar Alwahsh',
                'email' => 'ammar@gmail.com',
                'password' => Hash::make('Password'),
                'type' => 'user'
            ],
    ]);


    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('Admin.123'),
                'status' => 1
            ],
            [
                'name' => 'Panitia',
                'username' => 'panitia',
                'email' => 'panitia@gmail.com',
                'role' => 'panitia',
                'password' => bcrypt('panitia.123'),
                'status' => 1
            ],
            [
                'name' => 'Peserta',
                'username' => 'peserta',
                'email' => 'peserta@gmail.com',
                'role' => 'peserta',
                'password' => bcrypt('peserta.123'),
                'status' => 1
            ],
        ]);
    }
}
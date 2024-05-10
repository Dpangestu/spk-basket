<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DataPanitiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_panitia')->insert([
            [
                'id_user' => 1,
                'nomor_panitia' => 'P001',
                'nama_lengkap' => 'Andi Saputra',
                'tpt_lahir' => 'Jakarta',
                'tgl_lahir' => Carbon::parse('1990-05-15'),
                'jk' => 'L',
                'alamat_lengkap' => 'Jl. Mawar No. 123, Jakarta',
                'nomor_hp' => '08123456789',
                'email' => 'admin@gmail.com',
                'foto' => 'andi.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_user' => 2,
                'nomor_panitia' => 'P002',
                'nama_lengkap' => 'Siti Aisyah',
                'tpt_lahir' => 'Bandung',
                'tgl_lahir' => Carbon::parse('1992-07-20'),
                'jk' => 'P',
                'alamat_lengkap' => 'Jl. Melati No. 45, Bandung',
                'nomor_hp' => '08129876543',
                'email' => 'panitia@gmail.com',
                'foto' => 'siti.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
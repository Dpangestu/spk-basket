<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DataPesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_peserta')->insert([
            [
                'id_user' => 3,
                'nomor_peserta' => 'PS001',
                'nama_lengkap' => 'Ahmad Fauzi',
                'tpt_lahir' => 'Surabaya',
                'tgl_lahir' => Carbon::parse('1995-04-10'),
                'jk' => 'L',
                'alamat_lengkap' => 'Jl. Anggrek No. 1, Surabaya',
                'nomor_hp' => '0811111111',
                'email' => 'peserta@gmail.com',
                'foto' => 'ahmad.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
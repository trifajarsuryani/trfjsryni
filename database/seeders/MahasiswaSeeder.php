<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'name' => "trifajarsuryani",
                'NIM' => "13242420031",
                'prodi' => "Teknologi Informasi",
                'email' => "trifajarsuryani@example.com",
                'nohp' => "086428847299",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "ragil multipratama",
                'NIM' => "13242420048",
                'prodi' => "Sistem Informasi",
                'email' => "rgilmltiprtma@example.com",
                'nohp' => "6281234567890",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "park sunghoon",
                'NIM' => "13242420049",
                'prodi' => "Teknik Komputer",
                'email' => "sunghoonpark@example.com",
                'nohp' => "6281234567891",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
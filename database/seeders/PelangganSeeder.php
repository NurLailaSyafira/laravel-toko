<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('pelanggan')->insert([
            [
                'nama_lengkap' => 'Nur Laila Syafira',
                'email' => 'nurlailasyafira2128@gmail.com',
                'no_hp' => '081234567890',
                'alamat' => 'Purworejo, Jawa Tengah',
                'tanggal_daftar' => now(),
                'created_at'=> now(),
                'updated_at' => now(),
            ],
             [
                'nama_lengkap' => 'Lee Jeno',
                'email' => 'Jeno@gmail.com',
                'no_hp' => '082233445566',
                'alamat' => 'Yogyakarta',
                'tanggal_daftar' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Park Hyung sik',
                'email' => 'hyungsik@gmail.com',
                'no_hp' => '089998887776',
                'alamat' => 'Bandung',
                'tanggal_daftar' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

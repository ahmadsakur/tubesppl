<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ruang;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ruang::Create([
            'nama'=> 'R001',
            'deskripsi' => 'Ruang CEO'
        ]);

        Ruang::Create([
            'nama'=> 'R002',
            'deskripsi' => 'Ruang CTO'
        ]);

        Ruang::Create([
            'nama'=> 'R003',
            'deskripsi' => 'Ruang Sekretaris'
        ]);

        Ruang::Create([
            'nama'=> 'R004',
            'deskripsi' => 'Ruang Manager Cabang'
        ]);

        Ruang::Create([
            'nama'=> 'R005',
            'deskripsi' => 'Cafetaria'
        ]);

        Ruang::Create([
            'nama'=> 'R006',
            'deskripsi' => 'Ruang Tamu'
        ]);

        Ruang::Create([
            'nama'=> 'R007',
            'deskripsi' => 'Ruang Tamu VIP'
        ]);

        Ruang::Create([
            'nama'=> 'R008',
            'deskripsi' => 'Ruang Santai'
        ]);

        Ruang::Create([
            'nama'=> 'R009',
            'deskripsi' => 'Kamar Mandi 1'
        ]);

        Ruang::Create([
            'nama'=> 'R010',
            'deskripsi' => 'Kamar Mandi 2'
        ]);

    }
}

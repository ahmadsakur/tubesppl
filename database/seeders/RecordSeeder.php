<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeder record
        $cs = 3;
        $ruang = 3;
        for ($count=1; $count <= 10; $count++) { 
            DB::table('task')->insert([
                'id_ruang' => strval($ruang),
                'id_cs' => strval($cs),
                'status' => 'KOTOR',
                'tanggal' => '2020-12-15'
            ]);
            $cs++; 
            $ruang++;
        }

        $cs2 = 3;
        $ruang2 = 13;
        for ($count=1; $count <= 10; $count++) { 
            DB::table('task')->insert([
                'id_ruang' => strval($ruang2),
                'id_cs' => strval($cs2),
                'status' => 'KOTOR',
                'tanggal' => '2020-12-15'
            ]);
            $cs2++; 
            $ruang2++;
        }
        
    }
}

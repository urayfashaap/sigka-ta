<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusMutu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_mutu')->insert(
            [
                [
                    'id' => 1,
                    'nama_status' => 'Memenuhi Baku Mutu',
                    'kelas_status' => 'A',
                ],
                [
                    'id' => 2,
                    'nama_status' => 'Tercemar Ringan',
                    'kelas_status' => 'B',
                ],
                [
                    'id' => 3,
                    'nama_status' => 'Tercemar Sedang',
                    'kelas_status' => 'C',
                ],
                [
                    'id' => 4,
                    'nama_status' => 'Tercemar Berat',
                    'kelas_status' => 'D',
                ],
            ]
        );
    }
}

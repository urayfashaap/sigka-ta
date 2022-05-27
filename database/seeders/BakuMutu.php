<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BakuMutu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('baku_mutu')->insert(
            [
                [
                    'id' => 1,
                    'parameter' => 'temperatur',
                    'minimum' => '22',
                    'maksimum' => '30',
                ],
                [
                    'id' => 2,
                    'parameter' => 'tds',
                    'minimum' => '0',
                    'maksimum' => '1000',
                ],
                [
                    'id' => 3,
                    'parameter' => 'tss',
                    'minimum' => '0',
                    'maksimum' => '50',
                ],
                [
                    'id' => 4,
                    'parameter' => 'ph',
                    'minimum' => '6',
                    'maksimum' => '9',
                ],
                [
                    'id' => 5,
                    'parameter' => 'bod',
                    'minimum' => '0',
                    'maksimum' => '3',
                ],
                [
                    'id' => 6,
                    'parameter' => 'cod',
                    'minimum' => '0',
                    'maksimum' => '25',
                ],
                [
                    'id' => 7,
                    'parameter' => 'do',
                    'minimum' => '4',
                    'maksimum' => '1000',
                ],
                [
                    'id' => 8,
                    'parameter' => 'sulfat',
                    'minimum' => '0',
                    'maksimum' => '300',
                ],
                [
                    'id' => 9,
                    'parameter' => 'clorida',
                    'minimum' => '0',
                    'maksimum' => '300',
                ],
                [
                    'id' => 10,
                    'parameter' => 'nitrat',
                    'minimum' => '0',
                    'maksimum' => '10',
                ],
                [
                    'id' => 11,
                    'parameter' => 'nitrit',
                    'minimum' => '0',
                    'maksimum' => '0.06',
                ],
                [
                    'id' => 12,
                    'parameter' => 'amoniak',
                    'minimum' => '0',
                    'maksimum' => '0.2',
                ],
                [
                    'id' => 13,
                    'parameter' => 'sianida',
                    'minimum' => '0',
                    'maksimum' => '0.02',
                ],
                [
                    'id' => 14,
                    'parameter' => 'merkuri',
                    'minimum' => '0',
                    'maksimum' => '0.002',
                ],
                [
                    'id' => 15,
                    'parameter' => 'seng',
                    'minimum' => '0',
                    'maksimum' => '0.5',
                ],
                [
                    'id' => 16,
                    'parameter' => 'kromium',
                    'minimum' => '0',
                    'maksimum' => '0.05',
                ],
                [
                    'id' => 17,
                    'parameter' => 'detergen',
                    'minimum' => '0',
                    'maksimum' => '0.2',
                ],
                [
                    'id' => 18,
                    'parameter' => 'fenol',
                    'minimum' => '0',
                    'maksimum' => '0.005',
                ],
                [
                    'id' => 19,
                    'parameter' => 'fecal_coliform',
                    'minimum' => '0',
                    'maksimum' => '1000',
                ],
                [
                    'id' => 20,
                    'parameter' => 'total_coliform',
                    'minimum' => '0',
                    'maksimum' => '5000',
                ],
            ]
        );
    }
}

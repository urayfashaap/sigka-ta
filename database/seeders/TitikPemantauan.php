<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Flynsarmy\CsvSeeder\CsvSeeder;

class TitikPemantauan extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
    {
        $this->table = 'titik_pemantauan';
        $this->filename = base_path() . '/database/seeds/csvs/titik_pemantauan.csv';
    }
    public function run()
    {
        parent::run();
    }
}

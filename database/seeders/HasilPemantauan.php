<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;
use Flynsarmy\CsvSeeder\CsvSeeder;

class HasilPemantauan extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
    {
        $this->table = 'hasil_pemantauan';
        $this->filename = base_path() . '/database/seeds/csvs/hasil pemantauan.csv';
        // $this->csv_delimiter = ',';
    }
    public function run()
    {
        parent::run();
    }
}

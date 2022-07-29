<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'Admin DLH Pontianak',
                    'email' => 'dlh@gmail.com',
                    'password' => '$2y$10$ttcIQrdGpEWEjHMNInSzjugej/GxHayyVxedv/vvUydRx2kK6VaiO',
                ],
            ]
        );
    }
}

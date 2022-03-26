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
                    'name' => 'Michael Renu',
                    'nip' => '123456789012345678',
                    'email' => 'urayfasha@gmail.com',
                    // 'email_verified_at' => date(DATE_ISO8601),
                    // 'email_verified_at' => date("Y-m-d H:i:s"),
                    'password' => '$2y$10$aimdiFX8dpt2KXum3KKQ2OCDZy5eELktqUtGC2DyIrD7zDNAuoKwu',
                ],
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivationCodesSeeder extends Seeder
{
    public function run()
    {
        DB::table('activation_codes')->insert([
            [
                'code' => 'master',
                'status' => 'Valid',
                'activated_by' => 'NULL',
                'created_by' => 'admin@demo.com',
                'created_at' => '2023-10-17 20:28:22',
                'updated_at' => '2023-10-17 20:28:23'
            ],
            // Insert other activation codes here following the same format
        ]);
    }
}

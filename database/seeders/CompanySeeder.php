<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            [
                'name' => 'Amazon',
                'description' => '...',
                'phone' => '1111111'
            ],
            [
                'name' => 'Azure',
                'description' => '...',
                'phone' => '2222222'
            ],
            [
                'name' => 'Digital Ocean',
                'description' => '...',
                'phone' => '3333333'
            ],
        ]);
    }
}

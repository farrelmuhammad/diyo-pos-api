<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('inventories')->insert([
            [
                'name' => 'Beras',
                'price' => 15000,
                'amount' => 1000,
                'unit' => 'gram',
            ],
            [
                'name' => 'Minyak Goreng',
                'price' => 20000,
                'amount' => 750,
                'unit' => 'mililiter',
            ],
        ]);
    }
}

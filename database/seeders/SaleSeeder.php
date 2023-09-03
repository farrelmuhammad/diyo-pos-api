<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sales')->insert([
            [
                'id' => 'S-201007-171921',
                'cart' => json_encode([
                    [
                        'product_id' => 1,
                        'price' => 50000,
                        'variants' => json_encode([
                            ['variants_name' => 'mushroom', 'price' => 18000],
                            ['variants_name' => 'chicken', 'price' => 20000],
                        ]),
                    ],
                    [
                        'product_id' => 2,
                        'price' => 30000,
                    ],
                ]),
                'total_price' => 118000,
                'created_at' => '2020-06-01 18:00:00',
                'payment_method' => 'GOPAY',
            ],
            [
                'id' => 'S-201007-171922',
                'cart' => json_encode([
                    [
                        'product_id' => 3,
                        'price' => 40000,
                    ],
                ]),
                'total_price' => 40000,
                'created_at' => '2020-06-01 19:00:00',
                'payment_method' => 'OVO',
            ],
        ]);
    }
}

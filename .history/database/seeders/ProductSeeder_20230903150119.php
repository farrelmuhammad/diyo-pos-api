<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Spaghetti Aglio Olio',
                'description' => 'Spaghetti that cooked with onion and olive oil',
                'price' => 50000,
                'variants' => json_encode([
                    ['name' => 'original', 'additional_price' => 0],
                    ['name' => 'mushroom', 'additional_price' => 10000],
                    ['name' => 'chicken', 'additional_price' => 20000],
                ]),
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description of Product 2',
                'price' => 25000,
                'variants' => json_encode([
                    ['name' => 'variant1', 'additional_price' => 5000],
                    ['name' => 'variant2', 'additional_price' => 8000],
                ]),
            ],
        ]);
    }
}

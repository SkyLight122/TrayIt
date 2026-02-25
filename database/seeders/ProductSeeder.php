<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | BAKERY 1 (12 Products)
        |--------------------------------------------------------------------------
        */

        for ($i = 1; $i <= 12; $i++) {

            $product = Product::create([
                'name' => "Bakery 1 Cake $i",
                'bakery_id' => 1,
                'description' => "Delicious cake number $i from Bakery 1.",
                'cake_type_id' => rand(1,3),
                'preorder' => rand(0,1),
            ]);

            $product->product_variants()->createMany([
                ['variant' => 'Slice', 'price' => rand(20000,30000)],
                ['variant' => 'Small (15cm)', 'price' => rand(80000,100000)],
                ['variant' => 'Large (20cm)', 'price' => rand(120000,160000)],
            ]);
        }


        /*
        |--------------------------------------------------------------------------
        | BAKERY 2 (12 Products)
        |--------------------------------------------------------------------------
        */

        for ($i = 1; $i <= 12; $i++) {

            $product = Product::create([
                'name' => "Bakery 2 Cake $i",
                'bakery_id' => 2,
                'description' => "Special cake number $i from Bakery 2.",
                'cake_type_id' => rand(1,3),
                'preorder' => rand(0,1),
            ]);

            $product->product_variants()->createMany([
                ['variant' => 'Slice', 'price' => rand(22000,32000)],
                ['variant' => 'Medium (18cm)', 'price' => rand(90000,120000)],
                ['variant' => 'Family Size', 'price' => rand(150000,180000)],
            ]);
        }
    }
}
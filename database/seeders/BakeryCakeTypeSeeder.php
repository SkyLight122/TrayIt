<?php

namespace Database\Seeders;

use App\Models\Bakery;
use App\Models\CakeType;
use Illuminate\Database\Seeder;

class BakeryCakeTypeSeeder extends Seeder
{
    public function run(): void
    {
        $cakeTypeIds = CakeType::pluck('id', 'name')->toArray();

        $mapping = [
            1  => ['Cake', 'Bread'],
            2  => ['Cake', 'Dessert', 'Cookies'],
            3  => ['Pastry'],
            4  => ['Cake', 'Dessert'],
            5  => ['Bread'],
            6  => ['Bread', 'Savory'],
            7  => ['Cookies'],
            8  => ['Cake', 'Dessert'],
            9  => ['Bread'],
            10 => ['Bread', 'Savory'],
            11 => ['Cake'],
            12 => ['Bread'],
            13 => ['Cake', 'Pastry', 'Dessert'],
            14 => ['Cake'],
            15 => ['Bread', 'Savory'],
        ];

        foreach ($mapping as $bakeryId => $cakeNames) {
            $bakery = Bakery::find($bakeryId);

            if (! $bakery) continue;

            $ids = collect($cakeNames)
                ->map(fn ($name) => $cakeTypeIds[$name])
                ->toArray();

            $bakery->cake_types()->sync($ids);
        }
    }
}

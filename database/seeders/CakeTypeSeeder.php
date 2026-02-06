<?php

namespace Database\Seeders;

use App\Models\CakeType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CakeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cakeTypes = ['Cake', 'Bread', 'Pastry', 'Cookies', 'Dessert', 'Savory'];

        foreach ($cakeTypes as $cakeType) {

            CakeType::create([
                'name' => $cakeType,
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\BakeryType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BakeryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BakeryType::create([
            'type' => 'daily'
        ]);
        BakeryType::create([
            'type' => 'week'
        ]);
    }
}

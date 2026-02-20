<?php

namespace Database\Seeders;

use App\Models\Unit as ModelsUnit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsUnit::create([
            'unit' => 'gram'
        ]);
        ModelsUnit::create([
            'unit' => 'kg'
        ]);
        ModelsUnit::create([
            'unit' => 'ml'
        ]);
        ModelsUnit::create([
            'unit' => 'liter'
        ]);
        ModelsUnit::create([
            'unit' => 'pcs'
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Bakery;
use App\Models\BakeryTemplate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BakeryTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BakeryTemplate::create([
            'name' => 'Classic'
        ]);
        BakeryTemplate::create([
            'name' => 'Modern'
        ]);
        BakeryTemplate::create([
            'name' => 'Kampung'
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\FinancialCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FinancialCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FinancialCategory::create([
            'category' => 'Salaries',
            'type' => 'Expense'
        ]);
        FinancialCategory::create([
            'category' => 'Utilities',
            'type' => 'Expense'
        ]);
        FinancialCategory::create([
            'category' => 'Marketing',
            'type' => 'Expense'
        ]);
        FinancialCategory::create([
            'category' => 'Other Expenses',
            'type' => 'Expense'
        ]);
        FinancialCategory::create([
            'category' => 'Other Income',
            'type' => 'Income'
        ]);
    }
}

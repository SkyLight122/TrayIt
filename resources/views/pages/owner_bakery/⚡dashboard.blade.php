<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;

new class extends Component
{
    public $total_menu, $bakery_id;

    // public function mount($bakery_id){
    //     $this->bakery_id = $bakery_id;
    // }

    #[Computed]
    public function total_menu(){
        return Product::where('bakery_id', $this->bakery_id)->count();
    }

    #[Computed]
    public function total_customer(){
        return Order::where('bakery_id', $this->bakery_id)->distinct()->count('user_id');
    }

    #[Computed]
    public function customer_this_day(){
        return User::whereHas('orders', function ($q){
            $q -> where('bakery_id', $this->bakery_id)->whereDate('created_at', today());
        })->get();
    }

    #[Computed]
    public function best_seller_products(){
        return Product::where('bakery_id', $this->bakery_id)->withSum('order_products', 'quantity')->orderByDesc('order_products_sum_quantity')->take(5)->get();
    }
};
?>

<div class="min-h-screen bg-blue-50 flex">
    <x-admin.sidebar></x-admin.sidebar>
    <div class="flex-1 ml-68 flex flex-col">
        <x-admin.header></x-admin.header>

        <main class="flex-1">
            <div class="flex items-center justify-between px-8">
                <h1 class="text-black text-3xl font-semibold">Bakery Analytics Overview</h1>
                <div class="flex space-x-4">
                    <button class="h-full py-1 mt-4 px-6 rounded-lg bg-white shadow-xl/20">
                        <img src="filtericon.png" alt="">
                        <p>Filter by <span class="text-blue-500"> <i>Week</i></span></p>
                    </button>

                    <button class="h-full py-1 mt-4 px-6 rounded-lg bg-white shadow-xl/20">
                        <img src="" alt="">
                        <p>January, 2026</p>
                    </button>
                </div>
            </div>
            <p class="px-8 text-gray-500 pb-4">January, 2026</p>

            <div class="flex flex-col">
                <div class="flex flex-row space-x-8 ml-8">
                    <div class="flex space-x-4">
                        <x-admin.datacardsm title="Total Menu" subtitle="Menu"></x-admin.datacardsm>
                        <x-admin.datacardsm title="Total Customer" subtitle="Customer"></x-admin.datacardsm>
                    </div>
                    <div class="flex space-x-4">
                    <x-admin.datacardlg title="Net Profit" title2="/Week" counter="Rp2.000.000"></x-admin.datacardlg>
                    <x-admin.datacardlg title="Total Net Profit" counter="Rp2.000.000"></x-admin.datacardlg>
                    </div>
                </div>

                <div class="flex flex-row space-x-8 ml-8 mt-2">
                    <x-admin.statsgraph title="Overall Sales" counter="Rp17.000.000" chartId="overallSalesChart" />
                    <x-admin.statsdiagram title="Visitors"></x-admin.statsdiagram>
                </div>

                <div class="flex flex-row space-x-4 ml-8 mt-2">
                    <x-admin.customerdata title="Customer This Day"></x-admin.customerdata>
                    <x-admin.productdata title="Best Seller"></x-admin.productdata>
                </div>
            </div>
        </main>
    </div>
</div>

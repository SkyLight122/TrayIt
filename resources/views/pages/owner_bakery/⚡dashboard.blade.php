<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;

new class extends Component {
    public $total_menu, $bakery_id;
    public $labels = [];
    public $values = [];
    public $filter = 'week';

    // public function mount($bakery_id){
    //     $this->bakery_id = $bakery_id;
    // }

    public function loadFilter(){
        $this->labels = [];
        $this->values = [];

        if($this->filter === 'week'){
            $this->loadWeekly();
        }
        if($this->filter === 'month'){
            $this->loadMonthly();
        }
        if($this->filter === 'year'){
            $this->loadYearly();
        }

    }

    public function loadWeekly(){
        $start = Carbon::now()->startOfWeek();
        $end = Carbon::now()->endOfWeek();

        $orders = Order::whereBetween('created_at', [$start, $end])->get()->groupBy(fn($item) => Carbon::parse($item->created_at)->format('D'));
        $days = ['Mon', 'Tue', "Wed", 'Thu', 'Fri', 'Sat', 'Sun'];

        foreach($days as $day){
            $this->labels = $day;
            $this->values = $orders[$day]->sum('total_price')??0;
        }
    }
    public function loadMonthly(){
        $start = Carbon::now()->startOfMonth();
            $end = Carbon::now()->endOfMonth();

            $orders = Order::whereBetween('created_at', [$start, $end])->get();
            $this->labels = ['Week 1', 'Week 2', 'Week 3', 'Week 4'];
            $this->values = [0, 0, 0, 0];
            foreach($orders as $order){
                $day = Carbon::parse($order->created_at)->day;
                if ($day <= 7) {
                    $this->values[0] += $order->total_price;
                } elseif ($day <= 14) {
                    $this->values[1] += $order->total_price;
                } elseif ($day <= 21) {
                    $this->values[2] += $order->total_price;
                } else {
                    $this->values[3] += $order->total_price;
                }
            }
    }
    public function loadYearly(){
        $year = Carbon::now()->year;
        $orders = Order::whereYear('created_at', $year)->get()->groupBy(fn($item) => Carbon::parse($item->created_at)->format('M'));

        $months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

        foreach ($months as $month) {
            $this->labels[] = $month;
            $this->values[] = $orders[$month]->sum('total_price') ?? 0;
        }
    }

    #[Computed]
    public function total_menu()
    {
        return Product::where('bakery_id', $this->bakery_id)->count();
    }

    #[Computed]
    public function total_customer()
    {
        return Order::where('bakery_id', $this->bakery_id)->distinct()->count('user_id');
    }

    #[Computed]
    public function customer_this_day()
    {
        return User::whereHas('orders', function ($q) {
            $q->where('bakery_id', $this->bakery_id)->whereDate('created_at', today());
        })->get();
    }

    #[Computed]
    public function best_seller_products()
    {
        return Product::where('bakery_id', $this->bakery_id)->withSum('order_products', 'quantity')->orderByDesc('order_products_sum_quantity')->take(5)->get();
    }
};
?>

<div class="min-h-screen bg-blue-50 flex">
    <x-admin.sidebar></x-admin.sidebar>

    <div class="flex-1 ml-68 flex flex-col">
        <div class="bg-blue-50 h-12 flex items-center justify-end px-8">
            <div class="flex flex-row space-x-4">
                <div class="flex flex-row space-x-4 mt-1">
                    <a href="">
                        <img src="images/notificationicon.png" class="w-6 h-6">
                    </a>
                    <a href="">
                        <img src="images/settingicon.png" class="w-6 h-6">
                    </a>
                </div>
                <img src="images/profile.png" class="w-8 h-8 rounded-full">
            </div>
        </div>

        <main class="flex-1">
            <div class="flex items-center justify-between px-8">
                <h1 class="text-black text-3xl font-semibold">Bakery Analytics Overview</h1>
                <div class="flex space-x-4">
                    <button class="h-full py-1 mt-4 px-4 rounded-lg bg-white custom-shadow flex flex-row">
                        <img src="images/filtericon.png" class="w-6 h-6 flex mr-1">
                        <p>Filter by <span class="text-blue-500"> <i>Week</i></span></p>
                    </button>

                    <button class="h-full py-1 mt-4 px-4 rounded-lg bg-white custom-shadow flex flex-row">
                        <img src="images/dateicon.png" class="w-6 h-6 flex mr-1">
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
                        <x-admin.datacardlg title="Net Profit" title2="/Week"
                            counter="Rp2.000.000"></x-admin.datacardlg>
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

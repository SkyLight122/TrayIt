<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;

new class extends Component
{
    public $total_menu, $bakery_id;

    public function mount($bakery_id){
        $this->bakery_id = $bakery_id;
    }

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

<div>
    {{-- It is never too late to be what you might have been. - George Eliot --}}
</div>
<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\Order;
use App\Models\OrderProduct;

new class extends Component
{
    public $bakery_id;

    public function mount($id){
        $this->bakery_id = $id;
    }

    #[Computed]
    public function orders(){
        return Order::where('bakery_id', $this->bakery_id)->with('order_products.product')->get();
    }
};
?>

<div>
    {{-- The whole future lies in uncertainty: live immediately. - Seneca --}}
</div>
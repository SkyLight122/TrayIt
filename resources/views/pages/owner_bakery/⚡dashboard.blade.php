<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\Product;

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
};
?>

<div>
    {{-- It is never too late to be what you might have been. - George Eliot --}}
</div>
<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\Product;
use App\Models\Bakery;

new class extends Component {
    public Bakery $bakery;

    public function mount(Bakery $bakery) 
    {
        $this->bakery = $bakery;
    }

    #[Computed]
    public function products()
    {
        return Product::where('bakery_id', $this->bakery->id)->get();
    }
};
?>

<div>
    {{-- Because you are alive, everything is possible. - Thich Nhat Hanh --}}
</div>

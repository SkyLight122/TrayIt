<?php

use Livewire\Component;
use App\Models\Bakery;
use App\Models\BakeryCakeType;

new class extends Component
{
    public $search;
    public $bakeries = [];
    public function mount($search){
        $this->search = $search;
        $this->searching();
    }

    public function searching(){
        $this->bakeries =  Bakery::where('name', 'like', '%' . $this->search . '%')->orWhereHas('cake_types', function($q){
            $q->where('name', 'like', '%' . $this->search . '%');
        })->get();
    }
};
?>

<div>
    {{-- The only way to do great work is to love what you do. - Steve Jobs --}}
</div>
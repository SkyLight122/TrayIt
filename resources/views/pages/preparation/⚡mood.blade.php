<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\CakeType;

new class extends Component
{
    #[Computed]
    public function moods(){
        return CakeType::all();
    }
};
?>

<div>
    {{-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh --}}
</div>
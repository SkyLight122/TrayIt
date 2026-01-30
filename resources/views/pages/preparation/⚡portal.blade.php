<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\Bakery;

new class extends Component
{
    #[Computed]
    public function bakeries(){
        return Bakery::all();
    }
};
?>

<div>
    {{-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison --}}
</div>
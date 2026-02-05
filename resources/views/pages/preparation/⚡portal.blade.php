<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\Bakery;

new class extends Component {
    public $search = '';

    #[Computed]
    public function bakeries()
    {
        return Bakery::where('name', 'like', "%{$this->search}%")
                    ->orWhere('email', 'like', "%{$this->search}%")
                    ->orWhere('phone_number', 'like', "%{$this->search}%")->get();
    }

};
?>

<div>
    <x-portal.header></x-portal.header>
</div>

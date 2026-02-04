<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\Bakery;

new class extends Component {
    public $search = '';

    #[Computed]
    public function users()
    {
        return Bakery::search($this->search)->get();
    }
};
?>

<div>
    <x-portal.header></x-portal.header>
</div>

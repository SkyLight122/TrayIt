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
    {{-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison --}}
</div>

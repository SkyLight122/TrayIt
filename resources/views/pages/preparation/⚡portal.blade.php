<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\Bakery;
use Livewire\WithPagination;
use App\Models\CakeType;

new class extends Component {
    use WithPagination;
    public $search = '';
    public $cake_type = null;

    public function mount()
    {
        if (auth()->user()?->cake_type_id) {
            $this->cake_type = CakeType::find(auth()->user()->cake_type_id)->name;
        }
    }

    public function search()
    {
        $this->resetPage();
    }

    public function setCategory($value)
    {
        $this->cake_type = $value;
        $this->resetPage();
    }

    #[Computed]
    public function bakeries()
    {
        return Bakery::where(function ($q) {
            $q->where('name', 'like', "%{$this->search}%")
                ->orWhere('email', 'like', "%{$this->search}%")
                ->orWhere('phone_number', 'like', "%{$this->search}%");
        })
            ->when($this->cake_type, function ($query) {
                $query->whereHas('cake_types', function ($q) {
                    $q->where('cake_types.name', $this->cake_type);
                });
            })
            ->paginate(10);
    }
};
?>

<div class="font-[montserrat]">
    <x-portal.header name="search"></x-portal.header>

    <div class="swiper iklan-swiper w-345 h-140 mx-auto overflow-hidden rounded-2xl">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset(path: 'assets/images/portal/iklan/Iklan.jpg') }}"
                    class="h-full w-full object-cover object-center">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('assets/images/portal/iklan/Iklan2.jpg') }}"
                    class="h-full w-full object-cover object-center">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('assets/images/portal/iklan/Iklan3.jpg') }}"
                    class="h-full w-full object-cover object-center">
            </div>
        </div>
    </div>

    <div class="my-15 flex flex-col">
        <div class="flex justify-center">
            <p class="text-3xl font-semibold">Bakery category</p>
        </div>

        <div class="mt-5 flex justify-center">
            <p class="text-center text-2xl text-[#6B6B6B]">Explore a wide selection of bakery and find the perfect <br>
                menu to match your taste</p>
        </div>
    </div>

    <div class="my-15 flex justify-center gap-10">
        <div wire:click="setCategory(null)"
            class="{{ $this->cake_type === null ? 'bg-[#1A76FF] text-white' : 'hover:bg-[#1A76FF] hover:text-white transition duration-200' }} group flex gap-3 rounded-xl px-4 py-2">
            <img class="{{ $this->cake_type === null ? 'hidden' : 'group-hover:hidden' }} size-7"
                src="{{ asset('assets/images/filter-category/all-black.png') }}">
            <img class="{{ $this->cake_type === null ? 'block' : 'hidden group-hover:block' }} size-7"
                src="{{ asset('assets/images/filter-category/All-white.png') }}">
            <button class="">All</button>
        </div>

        <div wire:click="setCategory('Cake')"
            class="{{ $this->cake_type === 'Cake' ? 'bg-[#1A76FF] text-white' : 'hover:bg-[#1A76FF] hover:text-white transition duration-200' }} group flex gap-3 rounded-xl px-4 py-2">
            <img class="{{ $this->cake_type === 'Cake' ? 'hidden' : 'group-hover:hidden' }} size-7"
                src="{{ asset('assets/images/filter-category/Cake-black.png') }}">
            <img class="{{ $this->cake_type === 'Cake' ? 'block' : 'hidden group-hover:block' }} size-7"
                src="{{ asset('assets/images/filter-category/cake-white.png') }}">
            <button class="">Cake</button>
        </div>

        <div wire:click="setCategory('Bread')"
            class="{{ $this->cake_type === 'Bread' ? 'bg-[#1A76FF] text-white' : 'hover:bg-[#1A76FF] hover:text-white transition duration-200' }} group flex gap-3 rounded-xl px-4 py-2">
            <img class="{{ $this->cake_type === 'Bread' ? 'hidden' : 'group-hover:hidden' }} size-7"
                src="{{ asset('assets/images/filter-category/bread-black.png') }}">
            <img class="{{ $this->cake_type === 'Bread' ? 'block' : 'hidden group-hover:block' }} size-7"
                src="{{ asset('assets/images/filter-category/bread-white.png') }}">
            <button class="">Bread</button>
        </div>

        <div wire:click="setCategory('Pastry')"
            class="{{ $this->cake_type === 'Pastry' ? 'bg-[#1A76FF] text-white' : 'hover:bg-[#1A76FF] hover:text-white transition duration-200' }} group flex gap-3 rounded-xl px-4 py-2">
            <img class="{{ $this->cake_type === 'Pastry' ? 'hidden' : 'group-hover:hidden' }} size-7"
                src="{{ asset('assets/images/filter-category/pastry-black.png') }}">
            <img class="{{ $this->cake_type === 'Pastry' ? 'block' : 'hidden group-hover:block' }} size-7"
                src="{{ asset('assets/images/filter-category/pastry-white.png') }}">
            <button class="">Pastry</button>
        </div>


        <div wire:click="setCategory('Cookies')"
            class="{{ $this->cake_type === 'Cookies' ? 'bg-[#1A76FF] text-white' : 'hover:bg-[#1A76FF] hover:text-white transition duration-200' }} group flex gap-3 rounded-xl px-4 py-2">
            <img class="{{ $this->cake_type === 'Cookies' ? 'hidden' : 'group-hover:hidden' }} size-7"
                src="{{ asset('assets/images/filter-category/Cookies-black.png') }}">
            <img class="{{ $this->cake_type === 'Cookies' ? 'block' : 'hidden group-hover:block' }} size-7"
                src="{{ asset('assets/images/filter-category/cookies-white.png') }}">
            <button class="">Cookies</button>
        </div>

        <div wire:click="setCategory('Dessert')"
            class="{{ $this->cake_type === 'Dessert' ? 'bg-[#1A76FF] text-white' : 'hover:bg-[#1A76FF] hover:text-white transition duration-200' }} group flex gap-3 rounded-xl px-4 py-2">
            <img class="{{ $this->cake_type === 'Dessert' ? 'hidden' : 'group-hover:hidden' }} size-7"
                src="{{ asset('assets/images/filter-category/dessert-black.png') }}">
            <img class="{{ $this->cake_type === 'Dessert' ? 'block' : 'hidden group-hover:block' }} size-7"
                src="{{ asset('assets/images/filter-category/dessert-white.png') }}">
            <button class="">Dessert</button>
        </div>

        <div wire:click="setCategory('Savory')"
            class="{{ $this->cake_type === 'Savory' ? 'bg-[#1A76FF] text-white' : 'hover:bg-[#1A76FF] hover:text-white transition duration-200' }} group flex gap-3 rounded-xl px-4 py-2">
            <img class="{{ $this->cake_type === 'Savory' ? 'hidden' : 'group-hover:hidden' }} size-7"
                src="{{ asset('assets/images/filter-category/savory-black.png') }}">
            <img class="{{ $this->cake_type === 'Savory' ? 'block' : 'hidden group-hover:block' }} size-7"
                src="{{ asset('assets/images/filter-category/savory-white.png') }}">
            <button class="">Savory</button>
        </div>
    </div>

    <div class="flex flex-wrap justify-center gap-6">
        @foreach ($this->bakeries as $bakery)
            <x-portal.card image="{{ $bakery->bakery_thumbnail }}" :title="$bakery->name" :description="$bakery->description">
            </x-portal.card>
        @endforeach
    </div>
    <div class="pt-6">
        {{ $this->bakeries->links('vendor.livewire.tailwind') }}
    </div>
    <div class="">
        <x-footer></x-footer>
    </div>
</div>

<script>
    new Swiper('.iklan-swiper'  , {
        loop: true,
        effect: 'fade',
        speed: 2000,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        }
    })
</script>

<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\Bakery;
use Livewire\WithPagination;


new class extends Component {
    use WithPagination;
    public $search = '';

    public function search()
    {
        $this->resetPage();
    }

    #[Computed]
    public function bakeries()
    {
        return Bakery::where('name', 'like', "%{$this->search}%")
                    ->orWhere('email', 'like', "%{$this->search}%")
                    ->orWhere('phone_number', 'like', "%{$this->search}%")->paginate(10);
    }

};
?>

<div class="font-[montserrat]">
    <x-portal.header name="search"></x-portal.header>

    <div class="swiper iklan-swiper w-345 h-140 mx-auto overflow-hidden rounded-2xl">
        <div class=" swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset(path: 'assets/images/portal/iklan/Iklan.jpg') }}"
                     class="w-full h-full object-cover object-center">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('assets/images/portal/iklan/Iklan2.jpg') }}"
                     class="w-full h-full object-cover object-center">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('assets/images/portal/iklan/Iklan3.jpg') }}"
                     class="w-full h-full object-cover object-center">
            </div>
        </div>
    </div>

    <div class="flex flex-col my-15">
        <div class="flex justify-center">
            <p class="font-semibold text-3xl">Bakery category</p>
        </div>

        <div class="flex justify-center mt-5">
            <p class="text-2xl text-center text-[#6B6B6B]">Explore a wide selection of bakery and find the perfect <br> menu to match your taste</p>
        </div>
    </div>

    <div class="flex justify-center gap-10 my-15">
        <div class="group flex gap-3 px-4 py-2 rounded-xl hover:bg-[#1A76FF] hover:text-white">
            <img class="size-7 group-hover:hidden" src="{{ asset('assets/images/filter-category/all-black.png') }}">
            <img class="size-7 hidden group-hover:block" src="{{ asset('assets/images/filter-category/All-white.png') }}">
            <button class="">All</button>
        </div>

        <div class="group flex gap-3 px-4 py-2 rounded-xl hover:bg-[#1A76FF] hover:text-white">
            <img class="size-7 group-hover:hidden" src="{{ asset('assets/images/filter-category/Cake-black.png') }}">
            <img class="size-7 hidden group-hover:block" src="{{ asset('assets/images/filter-category/cake-white.png') }}">
            <button class="">Cake</button>
        </div>

        <div class="group flex gap-3 px-4 py-2 rounded-xl hover:bg-[#1A76FF] hover:text-white">
            <img class="size-7 group-hover:hidden" src="{{ asset('assets/images/filter-category/bread-black.png') }}">
            <img class="size-7 hidden group-hover:block" src="{{ asset('assets/images/filter-category/bread-white.png') }}">
            <button class="">Bread</button>
        </div>

        <div class="group flex gap-3 px-4 py-2 rounded-xl hover:bg-[#1A76FF] hover:text-white">
            <img class="size-7 group-hover:hidden" src="{{ asset('assets/images/filter-category/pastry-black.png') }}">
            <img class="size-7 hidden group-hover:block" src="{{ asset('assets/images/filter-category/pastry-white.png') }}">
            <button class="">Pastry</button>
        </div>

        <div class="group flex gap-3 px-4 py-2 rounded-xl hover:bg-[#1A76FF] hover:text-white">
            <img class="size-7 group-hover:hidden" src="{{ asset('assets/images/filter-category/Cookies-black.png') }}">
            <img class="size-7 hidden group-hover:block" src="{{ asset('assets/images/filter-category/cookies-white.png') }}">
            <button class="">Cookies</button>
        </div>

        <div class="group flex gap-3 px-4 py-2 rounded-xl hover:bg-[#1A76FF] hover:text-white">
            <img class="size-7 group-hover:hidden" src="{{ asset('assets/images/filter-category/dessert-black.png') }}">
            <img class="size-7 hidden group-hover:block" src="{{ asset('assets/images/filter-category/dessert-white.png') }}">
            <button class="">Dessert</button>
        </div>

        <div class="group flex gap-3 px-4 py-2 rounded-xl hover:bg-[#1A76FF] hover:text-white">
            <img class="size-7 group-hover:hidden" src="{{ asset('assets/images/filter-category/savory-black.png') }}">
            <img class="size-7 hidden group-hover:block" src="{{ asset('assets/images/filter-category/savory-white.png') }}">
            <button class="">Savory</button>
        </div>
    </div>

    <div class="flex justify-center gap-6 flex-wrap">
        @foreach ($this->bakeries as $bakery)
            <x-portal.card 
                image="{{ $bakery->bakery_thumbnail }}" 
                :title="$bakery->name" 
                :description="$bakery->description">
            </x-portal.card>
        @endforeach
    </div>
    {{ $this->bakeries->links() }}
</div>

<script>
    new Swiper('.iklan-swiper', {
        loop: true,
        effect: 'fade',
        speed: 2000,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        }})
</script>
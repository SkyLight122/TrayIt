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

<div class="font-[montserrat]">
    <x-portal.header></x-portal.header>

    <div class="swiper iklan-swiper w-345 h-140 mx-auto overflow-hidden rounded-2xl">
        <div class=" swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('images/portal/iklan/Iklan.jpg') }}"
                     class="w-full h-full object-cover object-center">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('images/portal/iklan/Iklan2.jpg') }}"
                     class="w-full h-full object-cover object-center">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('images/portal/iklan/Iklan3.jpg') }}"
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
            <img class="size-7 group-hover:hidden" src="{{ asset('images/filter-category/all-black.png') }}">
            <img class="size-7 hidden group-hover:block" src="{{ asset('images/filter-category/All-white.png') }}">
            <button class="">All</button>
        </div>

        <div class="group flex gap-3 px-4 py-2 rounded-xl hover:bg-[#1A76FF] hover:text-white">
            <img class="size-7 group-hover:hidden" src="{{ asset('images/filter-category/Cake-black.png') }}">
            <img class="size-7 hidden group-hover:block" src="{{ asset('images/filter-category/cake-white.png') }}">
            <button class="">Cake</button>
        </div>

        <div class="group flex gap-3 px-4 py-2 rounded-xl hover:bg-[#1A76FF] hover:text-white">
            <img class="size-7 group-hover:hidden" src="{{ asset('images/filter-category/bread-black.png') }}">
            <img class="size-7 hidden group-hover:block" src="{{ asset('images/filter-category/bread-white.png') }}">
            <button class="">Bread</button>
        </div>

        <div class="group flex gap-3 px-4 py-2 rounded-xl hover:bg-[#1A76FF] hover:text-white">
            <img class="size-7 group-hover:hidden" src="{{ asset('images/filter-category/pastry-black.png') }}">
            <img class="size-7 hidden group-hover:block" src="{{ asset('images/filter-category/pastry-white.png') }}">
            <button class="">Pastry</button>
        </div>

        <div class="group flex gap-3 px-4 py-2 rounded-xl hover:bg-[#1A76FF] hover:text-white">
            <img class="size-7 group-hover:hidden" src="{{ asset('images/filter-category/Cookies-black.png') }}">
            <img class="size-7 hidden group-hover:block" src="{{ asset('images/filter-category/cookies-white.png') }}">
            <button class="">Cookies</button>
        </div>

        <div class="group flex gap-3 px-4 py-2 rounded-xl hover:bg-[#1A76FF] hover:text-white">
            <img class="size-7 group-hover:hidden" src="{{ asset('images/filter-category/dessert-black.png') }}">
            <img class="size-7 hidden group-hover:block" src="{{ asset('images/filter-category/dessert-white.png') }}">
            <button class="">Dessert</button>
        </div>

        <div class="group flex gap-3 px-4 py-2 rounded-xl hover:bg-[#1A76FF] hover:text-white">
            <img class="size-7 group-hover:hidden" src="{{ asset('images/filter-category/savory-black.png') }}">
            <img class="size-7 hidden group-hover:block" src="{{ asset('images/filter-category/savory-white.png') }}">
            <button class="">Savory</button>
        </div>
    </div>

    <div class="flex justify-center gap-6 flex-wrap">
        <x-portal.card image="images/portal/bakery/bakery1.png" 
        title="Bright Place" 
        description="Classic banana loaf cake with rich chunks and moist texture.">
        </x-portal.card>

        <x-portal.card image="images/portal/bakery/bakery2.jpg" 
        title="Butter Fold" 
        description="Flaky croissants with a golden, buttery finish.">
        </x-portal.card>

        <x-portal.card image="images/portal/bakery/bakery3.jpg" 
        title="Berry Bloom Cakes" 
        description="Colorful mini cakes topped with fresh fruits.">
        </x-portal.card>

        <x-portal.card image="images/portal/bakery/bakery4.jpg" 
        title="Petit Dessert Box" 
        description="Assorted dessert boxes with fruity and creamy toppings.">
        </x-portal.card>

        <x-portal.card image="images/portal/bakery/bakery5.jpg"
        title="Savory Puff House" 
        description="Savory pastry bites with herbs and golden crusts.">
        </x-portal.card>

        <x-portal.card image="images/portal/bakery/bakery6.jpg" 
        title="Garden Tartlets" 
        description="Savory tartlets filled with vegetables and cheese.">
        </x-portal.card>

        <x-portal.card image="images/portal/bakery/bakery7.jpg" 
        title="Crème Avenue" 
        description="Soft, buttery milk bread with a fluffy crumb.">
        </x-portal.card>

        <x-portal.card image="images/portal/bakery/bakery8.jpg" 
        title="Daily Dough" 
        description="Freshly baked bread with airy layers inside.">
        </x-portal.card>

        <x-portal.card image="images/portal/bakery/bakery9.jpg" 
        title="Choco Drip Pastry" 
        description="Chocolate-dipped pastries with a glossy finish.">
        </x-portal.card>   

        <x-portal.card image="images/portal/bakery/bakery10.jpg" 
        title="Oven Story" 
        description="Layered chocolate cake with creamy filling.">
        </x-portal.card>

        <x-portal.card image="images/portal/bakery/bakery11.jpg" 
        title="Roll & Cream" 
        description="Soft rolled sponge cake with light cream filling.">
        </x-portal.card>

        <x-portal.card image="images/portal/bakery/bakery12.jpg" 
        title="Cheese Cloud" 
        description="Creamy cheesecake topped with berry sauce.">
        </x-portal.card>

        <x-portal.card image="images/portal/bakery/bakery13.jpg" 
        title="Churro Dip Club" 
        description="Crispy churros served with rich chocolate dip.">
        </x-portal.card>

        <x-portal.card image="images/portal/bakery/bakery14.jpg" 
        title="Warm Cake Co." 
        description="Light sponge cake layered with fresh strawberries.">
        </x-portal.card>

        <x-portal.card image="images/portal/bakery/bakery15.jpg" 
        title="Petite Oven" 
        description="Fudgy chocolate brownies topped with fresh berries.">
        </x-portal.card>
    </div>
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
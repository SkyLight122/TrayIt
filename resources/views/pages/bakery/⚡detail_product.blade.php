<?php

use Livewire\Component;

new class extends Component {
    //
};
?>


<div class="bg-[#FFF8F0] min-h-screen overflow-hidden flex flex-col gap-[50px] font-[poppins]">
    <div class="relative z-20 w-full">
        <x-bakery.header></x-bakery.header>
    </div>

    <div class="flex justify-center items-center">

        <div class="flex flex-col gap-5">
            <div class="">
                <img class="w-110 h-120 object-cover rounded-2xl" src="{{ asset("/assets/images/bakery/Pizza.jpg") }}">
            </div>
            <div class="flex gap-5">
                <img class="size-24 object-cover rounded-2xl"
                    src="{{ asset("/assets/images/bakery/pizzavariant.jpg") }}">
                <img class="size-24 object-cover rounded-2xl"
                    src="{{ asset("/assets/images/bakery/detroitstylepizza.jpg") }}">
                <img class="size-24 object-cover rounded-2xl"
                    src="{{ asset("/assets/images/bakery/koreancheesecorn.jpg") }}">
                <img class="size-24 object-cover rounded-2xl"
                    src="{{ asset("/assets/images/bakery/sausagepizza.jpg") }}">
            </div>
        </div>

        <div class="flex flex-col gap-3 bg-black w-150 h-150">
            <div>
                <p class="text-xl text-[#C68B65] ">Bread</p>
            </div>
            <div>
                <p class="text-3xl text-[#88481E] font-medium">Sourdough Pizza</p>
            </div>

            <div class="flex gap-5">
                <div class="flex gap-2">
                    <img class="size-5 object-cover" src="{{ asset("/assets/images/bakery/star.png") }}">
                    <img class="size-5 object-cover" src="{{ asset("/assets/images/bakery/star.png") }}">
                    <img class="size-5 object-cover" src="{{ asset("/assets/images/bakery/star.png") }}">
                    <img class="size-5 object-cover" src="{{ asset("/assets/images/bakery/star.png") }}">
                    <img class="size-5 object-cover" src="{{ asset("/assets/images/bakery/star.png") }}">
                </div>
                <div>
                    <p class=" text-[#88481E] ">4.8 (245 review)</p>
                </div>
            </div>

            <div>
                <p class="text-2xl text-[#88481E]">Rp 30.000</p>
            </div>

            <div class="">
                <p class="text-[#C68B65]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut blandit faucibus
                    augue, nec semper nulla laoreet eu. Nam vitae laoreet tortor.</p>
            </div>

            <div class="flex flex-col gap-2">
                <p class="text-[#88481E] font-medium text-[16px]">Flavors</p>
                <div class="flex flex-wrap gap-3">
                    <div
                        class="hover:bg-[#88481E] border-1 border-[#88481E] w-fit rounded-full flex justify-center items-center transition duration-200">
                        <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">Pepperoni Pizza</p>
                    </div>
                    <div
                        class="hover:bg-[#88481E] border-1 border-[#88481E] w-fit rounded-full flex justify-center items-center transition duration-200">
                        <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">Korean Cheese Corn</p>
                    </div>
                    <div
                        class="hover:bg-[#88481E] border-1 border-[#88481E] w-fit rounded-full flex justify-center items-center transition duration-200">
                        <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">Sausage Pizza</p>
                    </div>
                    <div
                        class="hover:bg-[#88481E] border-1 border-[#88481E] w-fit rounded-full flex justify-center items-center transition duration-200">
                        <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">Detroit Style Pizza</p>
                    </div>
                    <div
                        class="hover:bg-[#88481E] border-1 border-[#88481E] w-fit rounded-full flex justify-center items-center transition duration-200">
                        <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">Triple Meat Pizza</p>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
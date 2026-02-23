<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="bg-[#FFF8F0] min-h-screen overflow-hidden flex flex-col gap-[140px]">
        <div class="relative z-20 w-full">
            <x-bakery.header></x-bakery.header>
        </div>

        <div class="flex justify-center">
        <div class="relative">
            <img class="w-[1355px] h-[430px] rounded-2xl object-cover" src="/assets/images/bakery/Croissants.jpg">

            <div class="absolute inset-0 opacity-40 bg-black rounded-2xl"></div>

                <div class="absolute inset-0 flex justify-center items-center flex-col gap-[10px]">
                    <p class="font-['Playfair_Display'] text-[#FFF8F0] text-[64px]">Stay up to date</p>
                </div>
        </div>
    </div>
</div>
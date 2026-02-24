<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div class="bg-[#FFF8F0] min-h-screen overflow-hidden flex flex-col gap-[100px]">
    <div class="relative z-20 w-full">
        <x-bakery.header></x-bakery.header>
    </div>

    <div class="flex justify-center">
        <div class="relative">
            <img class="w-[1355px] h-[430px] rounded-2xl object-cover" src="/assets/images/bakery/Croissants.jpg">

            <div class="absolute inset-0 opacity-40 bg-black rounded-2xl"></div>

            <div class="absolute inset-0 flex justify-center items-center flex-col gap-[10px]">
                <p class="font-['PLayfair_display'] text-[#FFF8F0] text-[52px]">Contact Us</p>
                <div class="w-200">
                    <p class="font-[poppins] text-[#FFF8F0] text-center text-[24px]">We’d love to hear from you! Whether
                        you have a question about reservations, special requests, or need assistance with our platform,
                        our team is here to help.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col justify-center items-center">
        <p class="font-['PLayfair_display'] text-[#88481E] text-[52px]">Get in Touch With Us</p>
        <div class="w-200">
            <p class="font-[poppins] text-[#88481E] text-center text-[24px]">Reach out anytime, we’re here to help with
                your reservation needs and more.</p>
        </div>
    </div>

    <div class="flex gap-10 justify-center">
        <div class="flex flex-col items-center justify-center gap-5">
            <img class="size-10" src="/assets/images/bakery/about_us/email.png">
            <p class="font-[poppins] text-[#000000] text-center text-[24px] font-medium">EMAIL US</p>
            <div class="w-80">
                <p class="font-[poppins] text-[#000000] text-center text-[18px]">We value your thoughts! Share your
                    feedback or suggestions with us anytime.</p>
            </div>
            <p class="font-[poppins] text-[#88481E] text-center text-[18px]">booked@gmail.id</p>
        </div>

        <div class="border-l border-1 border-[#88481E] h-90"></div>

        <div class="flex flex-col items-center justify-center gap-5">
            <img class="size-10" src="/assets/images/bakery/about_us/phone.png">
            <p class="font-[poppins] text-[#000000] text-center text-[24px] font-medium">CALL US</p>
            <div class="w-80">
                <p class="font-[poppins] text-[#000000] text-center text-[18px]">If you experience any issues or need
                    assistance, feel free to call us we’re here to help.</p>
            </div>
            <p class="font-[poppins] text-[#88481E] text-center text-[18px]">00 2334 3524 3453 22</p>
        </div>

        <div class="border-l border-1 border-[#88481E] h-90"></div>

        <div class="flex flex-col items-center justify-center gap-5">
            <img class="size-10" src="/assets/images/bakery/about_us/address.png">
            <p class="font-[poppins] text-[#000000] text-center text-[24px] font-medium">HEAD OFFICE</p>
            <div class="w-80">
                <p class="font-[poppins] text-[#000000] text-center text-[18px]">Visit our head office for inquiries,
                    partnerships, or support.</p>
            </div>
            <div class="w-80">
                <p class="font-[poppins] text-[#88481E] text-center text-[18px]">1247/Plot No. 39, 15th Phase, Colony,
                    Kkatpally, Hyderabad</p>
            </div>
        </div>
    </div>


    <div class="flex flex-col justify-center items-center gap-15">

    <div class="flex flex-col justify-center items-center">
        <p class="font-['PLayfair_display'] text-[#88481E] text-[52px]">Our Products</p>
        <div class="w-200">
            <p class="font-[poppins] text-[#88481E] text-center text-[24px]">We are always ready to make your day
                perfect</p>
        </div>
    </div>

        <div class="flex gap-10">
            <div class="zoom-wrapper relative w-72 h-115 rounded-2xl overflow-hidden">
                <img class="absolute inset-0 w-full h-full object-cover" src="/assets/images/bakery/about_us/sourdough.jpg">

                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/80"></div>

                <div class="relative z-20 flex h-full items-end">
                    <div class="w-80 p-5 font-[poppins] text-[#FFF8F0] font-light">
                    <p class="text-2xl">Sourdough Bread</p>
                    <p class="text-base">12 products</p>
                    </div>
                </div>
            </div>

            <div class="zoom-wrapper relative w-72 h-115 rounded-2xl overflow-hidden">
                <img class="absolute inset-0 w-full h-full object-cover" src="/assets/images/bakery/about_us/bagels.jpg">

                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/80"></div>

                <div class="relative z-20 flex h-full items-end">
                    <div class="w-80 p-5 font-[poppins] text-[#FFF8F0] font-light">
                    <p class="text-2xl">Bagels</p>
                    <p class="text-base">6 products</p>
                    </div>
                </div>
            </div>

            <div class="zoom-wrapper relative w-72 h-115 rounded-2xl overflow-hidden">
                <img class="absolute inset-0 w-full h-full object-cover" src="/assets/images/bakery/about_us/donuts.jpg">

                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/80"></div>

                <div class="relative z-20 flex h-full items-end">
                    <div class="w-80 p-5 font-[poppins] text-[#FFF8F0] font-light">
                    <p class="text-2xl">Donuts</p>
                    <p class="text-base">23 products</p>
                    </div>
                </div>
            </div>

            <div class="zoom-wrapper relative w-72 h-115 rounded-2xl overflow-hidden">
                <img class="absolute inset-0 w-full h-full object-cover" src="/assets/images/bakery/about_us/bombolone.jpg">

                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/80"></div>

                <div class="relative z-20 flex h-full items-end">
                    <div class="w-80 p-5 font-[poppins] text-[#FFF8F0] font-light">
                    <p class="text-2xl">Bomboloni</p>
                    <p class="text-base">8 products</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <button class="font-[poppins] flex text-sm bg-[#88481E] py-3 px-15 rounded-3xl self-start text-[#FFF8F0]">
                Pre-order now </button>
        </div>
    </div>

    <div>
        <x-bakery.footer></x-bakery.footer>
    </div>
</div>

<style>
    .zoom-wrapper img {
        object-fit: cover;
        transition:transform 0.5s;
    }

    .zoom-wrapper:hover img {
        transform: scale(1.07);
    }
</style>
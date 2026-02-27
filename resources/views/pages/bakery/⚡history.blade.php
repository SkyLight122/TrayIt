<?php

use Livewire\Component;

new class extends Component {
    public $showMore = false;

    public function toggleMore()
    {
        $this->showMore = !$this->showMore;
    }
};
?>

<div class="bg-[#FFF8F0] min-h-screen overflow-hidden flex flex-col gap-[50px]">
    <div class="relative z-20 w-full">
        <x-bakery.header></x-bakery.header>
    </div>

    <div class="flex flex-col gap-10">
        <div class="flex flex-col gap-10">
            <div class="font-[poppins] w-full flex flex-col justify-center items-center">
                <div class="bg-white rounded-3xl w-[1400px] p-8 flex flex-col gap-5">
                    <div class="flex justify-between items-start">
                        <div class="flex gap-15">
                            <div class="flex flex-col">
                                <p class="text-[14px] text-[#C68B65]">Order id</p>
                                <p class="text-[14px] text-[#522C12]">#ASDASDAS</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-[14px] text-[#C68B65]">Order date</p>
                                <p class="text-[14px] text-[#522C12]">January 20, 2026</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-[14px] text-[#C68B65]">Pick-up date</p>
                                <p class="text-[14px] text-[#522C12]">January 24, 2026</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-[14px] text-[#C68B65]">Pick-up address</p>
                                <p class="text-[14px] text-[#522C12]">1247/Plot No. 39, 15th Phase, Colony, Kkatpally,
                                    Hyderabad</p>
                            </div>
                        </div>


                        <div class=" cursor-pointer">
                            <div
                                class="bg-[#DA4F4A] w-[124px] h-[32px] flex items-center justify-center rounded-full gap-2">
                                <div>
                                    <img class="size-3.5" src="/assets/images/bakery/historypage/cancel.png">
                                </div>
                                <button class="text-white cursor-pointer">Cancel</button>
                            </div>
                        </div>

                    </div>

                    <div class="border-t border-1 border-[#C68B65] w-333"></div>

                    <div class="flex gap-3 flex-col">
                        <div class="flex gap-10 items-center justify-between">
                            <div class="flex gap-15 items-center">
                                <div>
                                    <img class="size-40 object-cover rounded-2xl" src="/assets/images/bakery/Pizza.jpg">
                                </div>
                                <div class="flex flex-col gap-2">
                                    <p class="font-medium text-[#88481E] text-[16px]">Pizza Sourdough</p>
                                    <div>
                                        <p class="text-[#AE693B] text-[14px]">Variant:</p>
                                        <p class="text-[#88481E] text-[14px]">Flavor: Korean Cheese Corn</p>
                                        <p class="text-[#88481E] text-[14px]">Size: XL</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="flex flex-col gap-2">
                                    <p class="text-[#AE693B] text-[16px]">Quantity</p>
                                    <p class="text-[#88481E] text-[16px] font-medium">Size: XL</p>
                                </div>
                            </div>

                            <div>
                                <div class="flex flex-col gap-2">
                                    <p class="text-[#AE693B] text-[16px]">Price</p>
                                    <p class="text-[#88481E] text-[16px] font-medium">Rp 60.000</p>
                                </div>
                            </div>

                            <div>
                                <div class="flex flex-col gap-2">
                                    <p class="text-[#AE693B] text-[16px]">Status</p>
                                    <p class="text-[#5AB75C] text-[16px] font-medium">Picked-up</p>
                                </div>
                            </div>

                            <div class=" cursor-pointer">
                                <div
                                    class="bg-[#5AB75C] w-[124px] h-[32px] flex items-center justify-center rounded-full gap-2">
                                    <button class="text-white cursor-pointer">Buy it again</button>
                                </div>
                            </div>
                        </div>

                        @if ($showMore)
                            <div class="flex gap-10 items-center justify-between">
                                <div class="flex gap-15 items-center">
                                    <div>
                                        <img class="size-40 object-cover rounded-2xl" src="/assets/images/bakery/Pizza.jpg">
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <p class="font-medium text-[#88481E] text-[16px]">Pizza Sourdough</p>
                                        <div>
                                            <p class="text-[#AE693B] text-[14px]">Variant:</p>
                                            <p class="text-[#88481E] text-[14px]">Flavor: Korean Cheese Corn</p>
                                            <p class="text-[#88481E] text-[14px]">Size: XL</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-col gap-2">
                                        <p class="text-[#AE693B] text-[16px]">Quantity</p>
                                        <p class="text-[#88481E] text-[16px] font-medium">Size: XL</p>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-col gap-2">
                                        <p class="text-[#AE693B] text-[16px]">Price</p>
                                        <p class="text-[#88481E] text-[16px] font-medium">Rp 60.000</p>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-col gap-2">
                                        <p class="text-[#AE693B] text-[16px]">Status</p>
                                        <p class="text-[#5AB75C] text-[16px] font-medium">Picked-up</p>
                                    </div>
                                </div>

                                <div class=" cursor-pointer">
                                    <div
                                        class="bg-[#5AB75C] w-[124px] h-[32px] flex items-center justify-center rounded-full gap-2">
                                        <button class="text-white cursor-pointer">Buy it again</button>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div wire:click="toggleMore" class="flex gap-2 items-center cursor-pointer select-none">
                            <a class="text-[#522C12] text-[14px]">
                                {{ $showMore ? 'Hide product' : 'See more product' }}
                            </a>

                            <img class="size-4 transition-transform duration-300 
                                {{ $showMore ? 'rotate-180' : '' }}" src="/assets/images/bakery/historypage/down.png">
                        </div>


                        <div class="border-t border-1 border-[#C68B65] w-333"></div>

                        <div class="flex justify-between items-center">
                            <div class="flex gap-15">
                                <div class="flex flex-col">
                                    <p class="text-[14px] text-[#C68B65]">Payment method</p>
                                    <p class="text-[14px] text-[#522C12]">QRIS</p>
                                </div>
                            </div>

                            <div class="flex gap-15 items-center">
                                <div class="">
                                    <p class="text-[16px] text-[#C68B65]">Payment successful</p>
                                </div>

                                <div class="flex gap-2">
                                    <p class="text-[16px] text-[#C68B65]">Total amount:</p>
                                    <p class="text-[18px] text-[#522C12] font-medium">Rp 60.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-10">
            <div class="font-[poppins] w-full flex flex-col justify-center items-center">
                <div class="bg-white rounded-3xl w-[1400px] p-8 flex flex-col gap-5">
                    <div class="flex justify-between items-start">
                        <div class="flex gap-15">
                            <div class="flex flex-col">
                                <p class="text-[14px] text-[#C68B65]">Order id</p>
                                <p class="text-[14px] text-[#522C12]">#ASDASDAS</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-[14px] text-[#C68B65]">Order date</p>
                                <p class="text-[14px] text-[#522C12]">January 20, 2026</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-[14px] text-[#C68B65]">Pick-up date</p>
                                <p class="text-[14px] text-[#522C12]">January 24, 2026</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-[14px] text-[#C68B65]">Pick-up address</p>
                                <p class="text-[14px] text-[#522C12]">1247/Plot No. 39, 15th Phase, Colony, Kkatpally,
                                    Hyderabad</p>
                            </div>
                        </div>


                        <div class=" cursor-pointer">
                            <div
                                class="bg-[#DA4F4A] w-[124px] h-[32px] flex items-center justify-center rounded-full gap-2">
                                <div>
                                    <img class="size-3.5" src="/assets/images/bakery/historypage/cancel.png">
                                </div>
                                <button class="text-white cursor-pointer">Cancel</button>
                            </div>
                        </div>

                    </div>

                    <div class="border-t border-1 border-[#C68B65] w-333"></div>

                    <div class="flex gap-3 flex-col">
                        <div class="flex gap-10 items-center justify-between">
                            <div class="flex gap-15 items-center">
                                <div>
                                    <img class="size-40 object-cover rounded-2xl" src="/assets/images/bakery/Pizza.jpg">
                                </div>
                                <div class="flex flex-col gap-2">
                                    <p class="font-medium text-[#88481E] text-[16px]">Pizza Sourdough</p>
                                    <div>
                                        <p class="text-[#AE693B] text-[14px]">Variant:</p>
                                        <p class="text-[#88481E] text-[14px]">Flavor: Korean Cheese Corn</p>
                                        <p class="text-[#88481E] text-[14px]">Size: XL</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="flex flex-col gap-2">
                                    <p class="text-[#AE693B] text-[16px]">Quantity</p>
                                    <p class="text-[#88481E] text-[16px] font-medium">Size: XL</p>
                                </div>
                            </div>

                            <div>
                                <div class="flex flex-col gap-2">
                                    <p class="text-[#AE693B] text-[16px]">Price</p>
                                    <p class="text-[#88481E] text-[16px] font-medium">Rp 60.000</p>
                                </div>
                            </div>

                            <div>
                                <div class="flex flex-col gap-2">
                                    <p class="text-[#AE693B] text-[16px]">Status</p>
                                    <p class="text-[#5AB75C] text-[16px] font-medium">Picked-up</p>
                                </div>
                            </div>

                            <div class=" cursor-pointer">
                                <div
                                    class="bg-[#5AB75C] w-[124px] h-[32px] flex items-center justify-center rounded-full gap-2">
                                    <button class="text-white cursor-pointer">Buy it again</button>
                                </div>
                            </div>
                        </div>

                        @if ($showMore)
                            <div class="flex gap-10 items-center justify-between">
                                <div class="flex gap-15 items-center">
                                    <div>
                                        <img class="size-40 object-cover rounded-2xl" src="/assets/images/bakery/Pizza.jpg">
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <p class="font-medium text-[#88481E] text-[16px]">Pizza Sourdough</p>
                                        <div>
                                            <p class="text-[#AE693B] text-[14px]">Variant:</p>
                                            <p class="text-[#88481E] text-[14px]">Flavor: Korean Cheese Corn</p>
                                            <p class="text-[#88481E] text-[14px]">Size: XL</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-col gap-2">
                                        <p class="text-[#AE693B] text-[16px]">Quantity</p>
                                        <p class="text-[#88481E] text-[16px] font-medium">Size: XL</p>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-col gap-2">
                                        <p class="text-[#AE693B] text-[16px]">Price</p>
                                        <p class="text-[#88481E] text-[16px] font-medium">Rp 60.000</p>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-col gap-2">
                                        <p class="text-[#AE693B] text-[16px]">Status</p>
                                        <p class="text-[#5AB75C] text-[16px] font-medium">Picked-up</p>
                                    </div>
                                </div>

                                <div class=" cursor-pointer">
                                    <div
                                        class="bg-[#5AB75C] w-[124px] h-[32px] flex items-center justify-center rounded-full gap-2">
                                        <button class="text-white cursor-pointer">Buy it again</button>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div wire:click="toggleMore" class="flex gap-2 items-center cursor-pointer select-none">
                            <a class="text-[#522C12] text-[14px]">
                                {{ $showMore ? 'Hide product' : 'See more product' }}
                            </a>

                            <img class="size-4 transition-transform duration-300 
                                {{ $showMore ? 'rotate-180' : '' }}" src="/assets/images/bakery/historypage/down.png">
                        </div>


                        <div class="border-t border-1 border-[#C68B65] w-333"></div>

                        <div class="flex justify-between items-center">
                            <div class="flex gap-15">
                                <div class="flex flex-col">
                                    <p class="text-[14px] text-[#C68B65]">Payment method</p>
                                    <p class="text-[14px] text-[#522C12]">QRIS</p>
                                </div>
                            </div>

                            <div class="flex gap-15 items-center">
                                <div class="">
                                    <p class="text-[16px] text-[#C68B65]">Payment successful</p>
                                </div>

                                <div class="flex gap-2">
                                    <p class="text-[16px] text-[#C68B65]">Total amount:</p>
                                    <p class="text-[18px] text-[#522C12] font-medium">Rp 60.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-10">
            <div class="font-[poppins] w-full flex flex-col justify-center items-center">
                <div class="bg-white rounded-3xl w-[1400px] p-8 flex flex-col gap-5">
                    <div class="flex justify-between items-start">
                        <div class="flex gap-15">
                            <div class="flex flex-col">
                                <p class="text-[14px] text-[#C68B65]">Order id</p>
                                <p class="text-[14px] text-[#522C12]">#ASDASDAS</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-[14px] text-[#C68B65]">Order date</p>
                                <p class="text-[14px] text-[#522C12]">January 20, 2026</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-[14px] text-[#C68B65]">Pick-up date</p>
                                <p class="text-[14px] text-[#522C12]">January 24, 2026</p>
                            </div>
                            <div class="flex flex-col">
                                <p class="text-[14px] text-[#C68B65]">Pick-up address</p>
                                <p class="text-[14px] text-[#522C12]">1247/Plot No. 39, 15th Phase, Colony, Kkatpally,
                                    Hyderabad</p>
                            </div>
                        </div>


                        <div class=" cursor-pointer">
                            <div
                                class="bg-[#DA4F4A] w-[124px] h-[32px] flex items-center justify-center rounded-full gap-2">
                                <div>
                                    <img class="size-3.5" src="/assets/images/bakery/historypage/cancel.png">
                                </div>
                                <button class="text-white cursor-pointer">Cancel</button>
                            </div>
                        </div>

                    </div>

                    <div class="border-t border-1 border-[#C68B65] w-333"></div>

                    <div class="flex gap-3 flex-col">
                        <div class="flex gap-10 items-center justify-between">
                            <div class="flex gap-15 items-center">
                                <div>
                                    <img class="size-40 object-cover rounded-2xl" src="/assets/images/bakery/Pizza.jpg">
                                </div>
                                <div class="flex flex-col gap-2">
                                    <p class="font-medium text-[#88481E] text-[16px]">Pizza Sourdough</p>
                                    <div>
                                        <p class="text-[#AE693B] text-[14px]">Variant:</p>
                                        <p class="text-[#88481E] text-[14px]">Flavor: Korean Cheese Corn</p>
                                        <p class="text-[#88481E] text-[14px]">Size: XL</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="flex flex-col gap-2">
                                    <p class="text-[#AE693B] text-[16px]">Quantity</p>
                                    <p class="text-[#88481E] text-[16px] font-medium">Size: XL</p>
                                </div>
                            </div>

                            <div>
                                <div class="flex flex-col gap-2">
                                    <p class="text-[#AE693B] text-[16px]">Price</p>
                                    <p class="text-[#88481E] text-[16px] font-medium">Rp 60.000</p>
                                </div>
                            </div>

                            <div>
                                <div class="flex flex-col gap-2">
                                    <p class="text-[#AE693B] text-[16px]">Status</p>
                                    <p class="text-[#5AB75C] text-[16px] font-medium">Picked-up</p>
                                </div>
                            </div>

                            <div class=" cursor-pointer">
                                <div
                                    class="bg-[#5AB75C] w-[124px] h-[32px] flex items-center justify-center rounded-full gap-2">
                                    <button class="text-white cursor-pointer">Buy it again</button>
                                </div>
                            </div>
                        </div>

                        @if ($showMore)
                            <div class="flex gap-10 items-center justify-between">
                                <div class="flex gap-15 items-center">
                                    <div>
                                        <img class="size-40 object-cover rounded-2xl" src="/assets/images/bakery/Pizza.jpg">
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <p class="font-medium text-[#88481E] text-[16px]">Pizza Sourdough</p>
                                        <div>
                                            <p class="text-[#AE693B] text-[14px]">Variant:</p>
                                            <p class="text-[#88481E] text-[14px]">Flavor: Korean Cheese Corn</p>
                                            <p class="text-[#88481E] text-[14px]">Size: XL</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-col gap-2">
                                        <p class="text-[#AE693B] text-[16px]">Quantity</p>
                                        <p class="text-[#88481E] text-[16px] font-medium">Size: XL</p>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-col gap-2">
                                        <p class="text-[#AE693B] text-[16px]">Price</p>
                                        <p class="text-[#88481E] text-[16px] font-medium">Rp 60.000</p>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex flex-col gap-2">
                                        <p class="text-[#AE693B] text-[16px]">Status</p>
                                        <p class="text-[#5AB75C] text-[16px] font-medium">Picked-up</p>
                                    </div>
                                </div>

                                <div class=" cursor-pointer">
                                    <div
                                        class="bg-[#5AB75C] w-[124px] h-[32px] flex items-center justify-center rounded-full gap-2">
                                        <button class="text-white cursor-pointer">Buy it again</button>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div wire:click="toggleMore" class="flex gap-2 items-center cursor-pointer select-none">
                            <a class="text-[#522C12] text-[14px]">
                                {{ $showMore ? 'Hide product' : 'See more product' }}
                            </a>

                            <img class="size-4 transition-transform duration-300 
                                {{ $showMore ? 'rotate-180' : '' }}" src="/assets/images/bakery/historypage/down.png">
                        </div>


                        <div class="border-t border-1 border-[#C68B65] w-333"></div>

                        <div class="flex justify-between items-center">
                            <div class="flex gap-15">
                                <div class="flex flex-col">
                                    <p class="text-[14px] text-[#C68B65]">Payment method</p>
                                    <p class="text-[14px] text-[#522C12]">QRIS</p>
                                </div>
                            </div>

                            <div class="flex gap-15 items-center">
                                <div class="">
                                    <p class="text-[16px] text-[#C68B65]">Payment successful</p>
                                </div>

                                <div class="flex gap-2">
                                    <p class="text-[16px] text-[#C68B65]">Total amount:</p>
                                    <p class="text-[18px] text-[#522C12] font-medium">Rp 60.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <x-bakery.footer></x-bakery.footer>
    </div>
</div>
<?php

use Livewire\Component;

new class extends Component {
    //
};
?>


<div class="bg-[#FFF8F0] min-h-screen overflow-hidden flex flex-col gap-[20px] font-[poppins]">
    <div class="relative z-20 w-full">
        <x-bakery.header></x-bakery.header>
    </div>

    <div class="flex flex-col gap-20">
        <div class="flex justify-center items-center gap-5">

            <div class="flex flex-col gap-5">
                <div class="">
                    <img class="w-125 h-125 object-cover rounded-2xl" src="{{ asset("/assets/images/bakery/Pizza.jpg") }}">
                </div>
                <div class="flex gap-5">
                    <img class="size-27.5 object-cover rounded-2xl"
                        src="{{ asset("/assets/images/bakery/pizzavariant.jpg") }}">
                    <img class="size-27.5 object-cover rounded-2xl"
                        src="{{ asset("/assets/images/bakery/detroitstylepizza.jpg") }}">
                    <img class="size-27.5 object-cover rounded-2xl"
                        src="{{ asset("/assets/images/bakery/koreancheesecorn.jpg") }}">
                    <img class="size-27.5  object-cover rounded-2xl"
                        src="{{ asset("/assets/images/bakery/sausagepizza.jpg") }}">
                </div>
            </div>

            <div class="flex flex-col gap-5 w-180 h-150">
                <div class="flex flex-col gap-2">
                    <div>
                        <p class="text-xl text-[#905A37] ">Bread</p>
                    </div>
                    <div>
                        <p class="text-3xl text-[#522C12] font-medium">Sourdough Pizza</p>
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
                            <p class=" text-[#522C12] ">4.8 (245 review)</p>
                        </div>
                    </div>

                    <div>
                        <p class="text-2xl text-[#522C12]">Rp 30.000</p>
                    </div>

                    <div class="">
                        <p class="text-[#905A37]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut blandit
                            faucibus
                            augue, nec semper nulla laoreet eu. Nam vitae laoreet tortor.</p>
                    </div>
                </div>

                <div>
                    <div class="flex flex-col gap-2">
                        <p class="text-[#522C12] font-medium text-[16px]">Flavors</p>
                        <div class="flex flex-wrap gap-3">
                            <div
                                class="cursor-pointer hover:bg-[#88481E] border-1 border-[#88481E] w-fit rounded-full flex justify-center items-center transition duration-200">
                                <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">Pepperoni Pizza</p>
                            </div>
                            <div
                                class="cursor-pointer hover:bg-[#88481E] border-1 border-[#88481E] w-fit rounded-full flex justify-center items-center transition duration-200">
                                <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">Korean Cheese Corn</p>
                            </div>
                            <div
                                class="cursor-pointer hover:bg-[#88481E] border-1 border-[#88481E] w-fit rounded-full flex justify-center items-center transition duration-200">
                                <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">Sausage Pizza</p>
                            </div>
                            <div
                                class="cursor-pointer hover:bg-[#88481E] border-1 border-[#88481E] w-fit rounded-full flex justify-center items-center transition duration-200">
                                <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">Detroit Style Pizza</p>
                            </div>
                            <div
                                class="cursor-pointer hover:bg-[#88481E] border-1 border-[#88481E] w-fit rounded-full flex justify-center items-center transition duration-200">
                                <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">Triple Meat Pizza</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <p class="text-[#522C12] font-medium text-[16px]">Size</p>
                        <div class="flex flex-wrap gap-3">
                            <div
                                class="cursor-pointer hover:bg-[#88481E] border-1 border-[#88481E] w-fit rounded-full flex justify-center items-center transition duration-200">
                                <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">S</p>
                            </div>
                            <div
                                class="cursor-pointer hover:bg-[#88481E] border-1 border-[#88481E] w-fit rounded-full flex justify-center items-center transition duration-200">
                                <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">M</p>
                            </div>
                            <div
                                class="cursor-pointer hover:bg-[#88481E] border-1 border-[#88481E] w-fit rounded-full flex justify-center items-center transition duration-200">
                                <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">L</p>
                            </div>
                            <div
                                class="cursor-pointer hover:bg-[#88481E] border-1 border-[#88481E] w-fit rounded-full flex justify-center items-center transition duration-200">
                                <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">XL</p>
                            </div>
                            <div
                                class="cursor-pointer hover:bg-[#88481E] border-1 border-[#88481E] w-fit rounded-full flex justify-center items-center transition duration-200">
                                <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">2XL</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex gap-5">
                    <div class="flex">
                        <div class="bg-[#88481E] w-12 h-12 flex justify-center items-center rounded-full">
                            <img class="size-4" src="/assets/images/bakery/product/minus.png">
                        </div>

                        <div class="w-12 flex justify-center items-center">
                            <p class="text-[#88481E] text-[24px]">1</p>
                        </div>

                        <div class="bg-[#88481E] w-12 h-12 flex justify-center items-center rounded-full">
                            <img class="size-4" src="/assets/images/bakery/product/plus.png">
                        </div>
                    </div>


                    <button
                        class="cursor-pointer font-[poppins] text-sm bg-[#88481E] py-3.5 px-16 rounded-3xl self-start text-[#FFF8F0]">Add
                        to cart</button>
                    <button
                        class="cursor-pointer font-[poppins] text-sm bg-[#FAA632] py-3.5 px-16 rounded-3xl self-start text-[#FFF8F0]">Buy
                        now</button>
                </div>

                <div class="border-t border-1 border-[#C68B65] w-full"></div>

                <div>
                    <div class="flex gap-2">
                        <p class="text-[16px] font-medium font-[poppins] text-[#522C12]">PO Closes:</p>
                        <p class="text-[16px] font-[poppins] text-[#522C12]">H-3 before pick up</p>
                    </div>
                    <div class="flex gap-2">
                        <p class="text-[16px] font-medium font-[poppins] text-[#522C12]">Ingredients:</p>
                        <p class="text-[16px] font-[poppins] text-[#522C12]">Sourdough starter, wheat flour, water, olive
                            oil, salt, tomato sauce, mozzarella cheese, selected toppings.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pl-35 flex flex-col gap-10">
            <p class="text-[24px] text-[#522C12] font-semibold">Reccomendation</p>
            <div class="flex gap-5">
                <x-bakery.smallcard photo="Challah" name="Challah" price="12K"></x-bakery.smallcard>
                <x-bakery.smallcard photo="GlutenSourdough" name="Gluten Free Sourdough" price="30K"></x-bakery.smallcard>
                <x-bakery.smallcard photo="Cheddarbagels" name="Cheddar Jalapeno Bagel" price="15K"></x-bakery.smallcard>
                <x-bakery.smallcard photo="Croissant" name="Croissant" price="20K"></x-bakery.smallcard>
                <x-bakery.smallcard photo="Focaccia" name="Focaccia" price="30K"></x-bakery.smallcard>
                <x-bakery.smallcard photo="Pizza" name="Pizza" price="30K"></x-bakery.smallcard>
                <x-bakery.smallcard photo="VeganBagels" name="Vegan Cream Cheese Bagel" price="23K"></x-bakery.smallcard>
            </div>
        </div>
    </div>

    <div class="pt-20">
        <x-bakery.footer></x-bakery.footer>
    </div>
</div>
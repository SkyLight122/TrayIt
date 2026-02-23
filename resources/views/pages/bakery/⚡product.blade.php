<?php

use Livewire\Component;
use App\Models\Product;
use App\Models\Bakery;
use App\Models\ProductVariant;

new class extends Component
{
    public $name, $bakery_id, $price, $stock, $description, $cake_type_id;
    public $preorder = false;
    public $images = [];
    public $selectedIndex;
    public $variants = [];

    public $showCart = false;

    public function toggleCart()
    {
        $this->showCart = !$this->showCart;
    }

    public function closeCart()
    {
        $this->showCart = false;
    }

    public function mount(Bakery $bakery)
    {
        $this->bakery_id = $bakery->id;
    }

    public function products()
    {
        return Product::where('bakery_id', $this->bakery_id)->get();
    }

    public function selectIndex($index){
        $this->selectedIndex = $index;
    }

    public function create(){
        $this->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|string|max:1000',
            'cake_type_id' => 'required',
        ], [
            'name.required' => 'Product name is required.',
            'name.string' => 'Product name must be valid text.',
            'name.max' => 'Product name may not be longer than 255 characters.',
            'description.max' => 'Product name may not be longer than 1000 characters.',
            'description.required' => 'Description is required.',
            'description.string' => 'Description must be valid text.',
            'cake_type_id.required' => 'Please select a cake type.',
        ]);
        $product = Product::create([
            'name' => $this->name,
            'bakery_id' => $this->bakery_id,
            'price' => 0,
            'description' => $this->description,
            'cake_type_id' => $this->cake_type_id,
            'preorder' => false
        ]);
        foreach($this->variants as $variant){
            ProductVariant::create([
                'product_id' => $product->id,
                'variant' => $variant->variant,
                'price' => $variant->price,
                'stock' => $variant->stock
            ]);
        }
    }

    public function addVariant($variant, $price, $stock){
        $this->variants[] = [
            'variant' => $variant,
            'price' => $price,
            'stock' => $stock
        ];
    }

    public function delete($id)
    {
        Product::where('bakery_id', $this->bakery->id)->findOrFail($id)->delete();
    }
};
?>

<div class="bg-[#FFF8F0] min-h-screen font-[poppins] flex flex-col gap-5">
    <div class="">
        <x-bakery.header></x-bakery.header>
    </div>

    <div class="flex gap-4 justify-between px-9">
        <div class="flex gap-3">
            <div class="flex justify-center items-center pr-5">
                <img class="size-6" src="/assets/images/bakery/product/filter.png">
            </div>

            <div
                class="hover:bg-[#88481E] border-1 border-[#88481E] rounded-full flex justify-center items-center transition duration-200">
                <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">All</p>
            </div>

            <div
                class="hover:bg-[#88481E] border-1 border-[#88481E] rounded-full flex justify-center items-center transition duration-200">
                <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">Cake</p>
            </div>

            <div
                class="hover:bg-[#88481E] border-1 border-[#88481E] rounded-full flex justify-center items-center transition duration-200">
                <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">Bread</p>
            </div>

            <div
                class="hover:bg-[#88481E] border-1 border-[#88481E] rounded-full flex justify-center items-center transition duration-200">
                <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">Pastry</p>
            </div>

            <div
                class="hover:bg-[#88481E] border-1 border-[#88481E] rounded-full flex justify-center items-center transition duration-200">
                <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">Cookies</p>
            </div>

            <div
                class="hover:bg-[#88481E] border-1 border-[#88481E] rounded-full flex justify-center items-center transition duration-200">
                <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">Dessert</p>
            </div>

            <div
                class="hover:bg-[#88481E] border-1 border-[#88481E] rounded-full flex justify-center items-center transition duration-200">
                <p class="hover:text-[#FFF8F0] text-[#88481E] px-5 py-1.5">Savory</p>
            </div>
        </div>


        <div class="flex gap-4">
            <div class="border border-[#88481E] rounded-full w-80 h-fit flex items-center px-5">
                <img class="absolute size-5" src="{{ asset('assets/images/bakery/product/Search.png') }}">
                <input id="search" type="text" placeholder="Search our menu..."
                    class="shadow-none outline-none h-10 w-full ml-10 pb-0.5 text-[#88481E]" />
            </div>

            {{-- <div class="flex justify-center">
                <div class="">
                    <div class="absolute py-4  px-8 ">
                        <img class="size-3" src="/assets/images/bakery/product/Down.png">
                    </div>
                    <select id="categoryFilter"
                        class="px-10 pl-15 py-2 appearance-none text-center rounded-full border border-[#88481E] bg-[#88481E] text-[#FFF8F0]">
                        <option value="all">All Categories</option>
                        <option value="bread">Bread</option>
                        <option value="pastry">Pastry</option>
                        <option value="cake">Cake</option>
                    </select>
                </div>
            </div> --}}


            <div class="bg-[#88481E] w-15 h-10.5 flex justify-center items-center rounded-full cursor-pointer">
                <button wire:click="toggleCart">
                    <img class="size-6" src="/assets/images/bakery/product/cart.png">
                </button>
            </div>
        </div>
    </div>

    <div class="flex justify-end z-20">
        <div class="fixed top-0 right-0 m-3 bg-[#FFF8F0] h-[97vh] w-120 rounded-2xl
            transform transition-transform duration-300 z-50
            {{ $showCart ? 'translate-x-0' : 'translate-x-full' }}">


            <div class="flex py-8 px-10 justify-between">
                <div class="flex justify-start">
                    <p class="text-[24px] font-medium text-[#88481E]">Cart,</p>
                    <p class="pl-3 text-[24px] font-medium text-[#D5A789]">3 items</p>
                </div>

                <div class="flex items-center">
                    <img wire:click="closeCart" class="size-5 cursor-pointer"
                        src="/assets/images/bakery/product/close.png">
                </div>
            </div>

            <div class="w-120 h-[65vh] flex flex-col overflow-hidden ">
                <div class="flex-1 flex flex-col gap-8 overflow-y-auto no-scrollbar">
                    <div class="flex w-120 justify-center gap-5">
                        <div class="">
                            <img class="size-25 object-cover rounded-2xl" src="/assets/images/bakery/Focaccia.jpg">
                        </div>

                        <div class="">
                            <div class="flex justify-between w-70">
                                <div class="flex flex-col">
                                    <p class="text-[#88481E] w-55 text-[20px] font-medium">Foccacia</p>
                                    <div>
                                        <select class=" bg-[#88481E] rounded-full text-center  text-[#FFF8F0] px-3 appearance-none
                                                        focus:outline-0" wire:model="selectedVariants">
                                            <option value="0">Focaccia Barese</option>
                                            <option value="1">Focaccia al Rosmarino</option>
                                            <option value="2">Sourdough Focaccia</option>
                                            <option value="3">Garden Focaccia</option>
                                            <option value="4">Garlic Confit</option>
                                        </select>
                                    </div>
                                </div>

                                <img class="size-7" src="/assets/images/bakery/product/delete.png">
                            </div>

                            <div class="flex pt-4 justify-between">
                                <div class="flex">
                                    <div class="bg-[#88481E] w-7 h-7 flex justify-center items-center rounded-full">
                                        <img class="size-3" src="/assets/images/bakery/product/minus.png">
                                    </div>

                                    <div class="w-8 flex justify-center items-center">
                                        <p class="text-[#88481E] text-[18px]">1</p>
                                    </div>

                                    <div class="bg-[#88481E] w-7 h-7 flex justify-center items-center rounded-full">
                                        <img class="size-3" src="/assets/images/bakery/product/plus.png">
                                    </div>
                                </div>

                                <div class="flex items-center justify-center">
                                    <p class="text-[#88481E] text-[18px]">Rp 12.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-120 justify-center gap-5">
                        <div class="">
                            <img class="size-25 object-cover rounded-2xl" src="/assets/images/bakery/Focaccia.jpg">
                        </div>

                        <div class="">
                            <div class="flex justify-between w-70">
                                <div class="flex flex-col">
                                    <p class="text-[#88481E] w-55 text-[20px] font-medium">Foccacia</p>
                                    <div>
                                        <select class=" bg-[#88481E] rounded-full text-center  text-[#FFF8F0] px-3 appearance-none
                                                        focus:outline-0" wire:model="selectedVariants">
                                            <option value="0">Focaccia Barese</option>
                                            <option value="1">Focaccia al Rosmarino</option>
                                            <option value="2">Sourdough Focaccia</option>
                                            <option value="3">Garden Focaccia</option>
                                            <option value="4">Garlic Confit</option>
                                        </select>
                                    </div>
                                </div>

                                <img class="size-7" src="/assets/images/bakery/product/delete.png">
                            </div>

                            <div class="flex pt-4 justify-between">
                                <div class="flex">
                                    <div class="bg-[#88481E] w-7 h-7 flex justify-center items-center rounded-full">
                                        <img class="size-3" src="/assets/images/bakery/product/minus.png">
                                    </div>

                                    <div class="w-8 flex justify-center items-center">
                                        <p class="text-[#88481E] text-[18px]">1</p>
                                    </div>

                                    <div class="bg-[#88481E] w-7 h-7 flex justify-center items-center rounded-full">
                                        <img class="size-3" src="/assets/images/bakery/product/plus.png">
                                    </div>
                                </div>

                                <div class="flex items-center justify-center">
                                    <p class="text-[#88481E] text-[18px]">Rp 12.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-120 justify-center gap-5">
                        <div class="">
                            <img class="size-25 object-cover rounded-2xl" src="/assets/images/bakery/Focaccia.jpg">
                        </div>

                        <div class="">
                            <div class="flex justify-between w-70">
                                <div class="flex flex-col">
                                    <p class="text-[#88481E] w-55 text-[20px] font-medium">Foccacia</p>
                                    <div>
                                        <select class=" bg-[#88481E] rounded-full text-center  text-[#FFF8F0] px-3 appearance-none
                                                        focus:outline-0" wire:model="selectedVariants">
                                            <option value="0">Focaccia Barese</option>
                                            <option value="1">Focaccia al Rosmarino</option>
                                            <option value="2">Sourdough Focaccia</option>
                                            <option value="3">Garden Focaccia</option>
                                            <option value="4">Garlic Confit</option>
                                        </select>
                                    </div>
                                </div>

                                <img class="size-7" src="/assets/images/bakery/product/delete.png">
                            </div>

                            <div class="flex pt-4 justify-between">
                                <div class="flex">
                                    <div class="bg-[#88481E] w-7 h-7 flex justify-center items-center rounded-full">
                                        <img class="size-3" src="/assets/images/bakery/product/minus.png">
                                    </div>

                                    <div class="w-8 flex justify-center items-center">
                                        <p class="text-[#88481E] text-[18px]">1</p>
                                    </div>

                                    <div class="bg-[#88481E] w-7 h-7 flex justify-center items-center rounded-full">
                                        <img class="size-3" src="/assets/images/bakery/product/plus.png">
                                    </div>
                                </div>

                                <div class="flex items-center justify-center">
                                    <p class="text-[#88481E] text-[18px]">Rp 12.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-120 justify-center gap-5">
                        <div class="">
                            <img class="size-25 object-cover rounded-2xl" src="/assets/images/bakery/Focaccia.jpg">
                        </div>

                        <div class="">
                            <div class="flex justify-between w-70">
                                <div class="flex flex-col">
                                    <p class="text-[#88481E] w-55 text-[20px] font-medium">Foccacia</p>
                                    <div>
                                        <select class=" bg-[#88481E] rounded-full text-center  text-[#FFF8F0] px-3 appearance-none
                                                        focus:outline-0" wire:model="selectedVariants">
                                            <option value="0">Focaccia Barese</option>
                                            <option value="1">Focaccia al Rosmarino</option>
                                            <option value="2">Sourdough Focaccia</option>
                                            <option value="3">Garden Focaccia</option>
                                            <option value="4">Garlic Confit</option>
                                        </select>
                                    </div>
                                </div>

                                <img class="size-7" src="/assets/images/bakery/product/delete.png">
                            </div>

                            <div class="flex pt-4 justify-between">
                                <div class="flex">
                                    <div class="bg-[#88481E] w-7 h-7 flex justify-center items-center rounded-full">
                                        <img class="size-3" src="/assets/images/bakery/product/minus.png">
                                    </div>

                                    <div class="w-8 flex justify-center items-center">
                                        <p class="text-[#88481E] text-[18px]">1</p>
                                    </div>

                                    <div class="bg-[#88481E] w-7 h-7 flex justify-center items-center rounded-full">
                                        <img class="size-3" src="/assets/images/bakery/product/plus.png">
                                    </div>
                                </div>

                                <div class="flex items-center justify-center">
                                    <p class="text-[#88481E] text-[18px]">Rp 12.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-120 justify-center gap-5">
                        <div class="">
                            <img class="size-25 object-cover rounded-2xl" src="/assets/images/bakery/Focaccia.jpg">
                        </div>

                        <div class="">
                            <div class="flex justify-between w-70">
                                <div class="flex flex-col">
                                    <p class="text-[#88481E] w-55 text-[20px] font-medium">Foccacia</p>
                                    <div>
                                        <select class=" bg-[#88481E] rounded-full text-center  text-[#FFF8F0] px-3 appearance-none
                                                        focus:outline-0" wire:model="selectedVariants">
                                            <option value="0">Focaccia Barese</option>
                                            <option value="1">Focaccia al Rosmarino</option>
                                            <option value="2">Sourdough Focaccia</option>
                                            <option value="3">Garden Focaccia</option>
                                            <option value="4">Garlic Confit</option>
                                        </select>
                                    </div>
                                </div>

                                <img class="size-7" src="/assets/images/bakery/product/delete.png">
                            </div>

                            <div class="flex pt-4 justify-between">
                                <div class="flex">
                                    <div class="bg-[#88481E] w-7 h-7 flex justify-center items-center rounded-full">
                                        <img class="size-3" src="/assets/images/bakery/product/minus.png">
                                    </div>

                                    <div class="w-8 flex justify-center items-center">
                                        <p class="text-[#88481E] text-[18px]">1</p>
                                    </div>

                                    <div class="bg-[#88481E] w-7 h-7 flex justify-center items-center rounded-full">
                                        <img class="size-3" src="/assets/images/bakery/product/plus.png">
                                    </div>
                                </div>

                                <div class="flex items-center justify-center">
                                    <p class="text-[#88481E] text-[18px]">Rp 12.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-8 px-10 ">
                <div class="flex justify-between items-center">
                    <p class="text-[18px] font-medium text-[#88481E]">Subtotal</p>
                    <p class="text-[18px] font-medium text-[#88481E]">Rp 84.000</p>
                </div>

                <button class="mt-3 w-full bg-[#88481E] text-[#FFF8F0] py-3 rounded-full">
                    See details
                </button>
            </div>

        </div>
    </div>

    @if($showCart)
        <div wire:click="closeCart" class="fixed inset-0 bg-black/50 z-10 transition-opacity">
        </div>
    @endif

    <div class="flex flex-col justify-center items-center gap-5">
        <div class="flex justify-center gap-8 flex-wrap overflow-hidden pb-5">
            <x-bakery.smallcard photo="Challah" name="Challah" price="12K"></x-bakery.smallcard>
            <x-bakery.smallcard photo="GlutenSourdough" name="Gluten Free Sourdough" price="30K"></x-bakery.smallcard>
            <x-bakery.smallcard photo="Cheddarbagels" name="Cheddar Jalapeno Bagel" price="15K"></x-bakery.smallcard>
            <x-bakery.smallcard photo="Croissant" name="Croissant" price="20K"></x-bakery.smallcard>
            <x-bakery.smallcard photo="Focaccia" name="Focaccia" price="30K"></x-bakery.smallcard>
            <x-bakery.smallcard photo="Pizza" name="Pizza" price="30K"></x-bakery.smallcard>
            <x-bakery.smallcard photo="VeganBagels" name="Vegan Cream Cheese Bagel" price="23K"></x-bakery.smallcard>
            <x-bakery.smallcard photo="DinnerRolls" name="Dinner Roll" price="8K"></x-bakery.smallcard>
            <x-bakery.smallcard photo="GreekBread" name="Greek Yogurt Bread" price="25K"></x-bakery.smallcard>
            <x-bakery.smallcard photo="TiramisuDonut" name="Tiramisu Donut" price="18K"></x-bakery.smallcard>
            <x-bakery.smallcard photo="Challah" name="Challah" price="12K"></x-bakery.smallcard>
            <x-bakery.smallcard photo="GlutenSourdough" name="Gluten Free Sourdough" price="30K"></x-bakery.smallcard>
            <x-bakery.smallcard photo="Cheddarbagels" name="Cheddar Jalapeno Bagel" price="15K"></x-bakery.smallcard>
            <x-bakery.smallcard photo="Croissant" name="Croissant" price="20K"></x-bakery.smallcard>
            <x-bakery.smallcard photo="Focaccia" name="Focaccia" price="30K"></x-bakery.smallcard>
            <x-bakery.smallcard photo="Pizza" name="Pizza" price="30K"></x-bakery.smallcard>
            <x-bakery.smallcard photo="VeganBagels" name="Vegan Cream Cheese Bagel" price="23K"></x-bakery.smallcard>
            <x-bakery.smallcard photo="DinnerRolls" name="Dinner Roll" price="8K"></x-bakery.smallcard>
            <x-bakery.smallcard photo="GreekBread" name="Greek Yogurt Bread" price="25K"></x-bakery.smallcard>
            <x-bakery.smallcard photo="TiramisuDonut" name="Tiramisu Donut" price="18K"></x-bakery.smallcard>
            <x-bakery.smallcard photo="Challah" name="Challah" price="12K"></x-bakery.smallcard>
        </div>
    </div>

    <div>
        <x-bakery.footer></x-bakery.footer>
    </div>

</div>

<style>
    .scroll-hide::-webkit-scrollbar {
        display: none;
    }

    .scroll-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>
<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\Product;
use App\Models\Bakery;

new class extends Component {
    public Bakery $bakery;

    public function mount(Bakery $bakery) 
    {
        $this->bakery = $bakery;
    }

    function formatNumber($number)
    {
        if ($number >= 1000000) {
            $value = $number / 1000000;
            return rtrim(rtrim(number_format($value, 1), '0'), '.') . 'M';
        }

        if ($number >= 1000) {
            $value = $number / 1000;
            return rtrim(rtrim(number_format($value, 1), '0'), '.') . 'K';
        }

        return $number;
    }

    #[Computed]
    public function products()
    {
        return Product::where('bakery_id', $this->bakery->id)->get();
    }
};
?>

<div class="bg-[#FFF8F0] min-h-screen overflow-hidden flex justify-center flex-col gap-[140px]">
    <div class="w-full">
        <div class="relative z-20 w-full">
            <x-bakery.header></x-bakery.header>
        </div>
        
        <div class="min-h-[90vh] pt-40 flex items-start  w-ful">

            <div class=" flex flex-col gap-[25px] w-full z-10 pl-15">
                <div class="flex flex-col">
                    <p class="text-[64px] font-['Playfair_Display'] font-medium text-[#522C12] ">Where Time</p>
                    <p class="text-[64px] mt-[-20px]  font-['Playfair_Display'] font-medium text-[#522C12] ">Turns Into Flavor</p>
                </div>
                
                <p class="text-[#522C12] text-[18px] mt-[-15px] w-[575px] h-[75px]">Our sourdough bread is naturally fermented to perfection, 
                    delivering a crispy golden crust, a soft airy crumb, and a rich, 
                    tangy flavor that keeps you coming back for more.
                </p>

                 <a href="{{ route('product') }}">
                    <button class="cursor-pointer font-[poppins] text-sm bg-[#88481E] py-3 px-15 rounded-full self-start text-[#FFF8F0]">Pre-order now</button>
                </a>
            </div>

            <div class="absolute right-7 top-0 flex items-center z-0">
                <img class="w-[750px] h-[730px] object-cover rounded-b-2xl" src="/assets/images/bakery/landingpage/sourdough.jpg">
            </div>
        </div> 
    </div>


    <div class="">
        <div class="flex justify-center pb-20">
            <p class="text-[64px] font-['Playfair_Display'] text-[#522C12] ">Our Menu</p>
        </div>

        <div class="flex gap-5 flex-shrink-0 animate-scroll pb-20">
                <x-bakery.bigcard photo="Challah" name="Challah" price="12K"></x-bakery.bigcard>
                <x-bakery.bigcard photo="GlutenSourdough" name="Gluten Free Sourdough" price="30K"></x-bakery.bigcard>
                <x-bakery.bigcard photo="Cheddarbagels" name="Cheddar Jalapeno Bagel" price="15K"></x-bakery.bigcard>
                <x-bakery.bigcard photo="Croissant" name="Croissant" price="20K"></x-bakery.bigcard>
                <x-bakery.bigcard photo="Focaccia" name="Focaccia" price="30K"></x-bakery.bigcard>
                <x-bakery.bigcard photo="Pizza" name="Pizza" price="30K"></x-bakery.bigcard>
                <x-bakery.bigcard photo="VeganBagels" name="Vegan Cream Cheese Bagel" price="23K"></x-bakery.bigcard>
                <x-bakery.bigcard photo="DinnerRolls" name="Dinner Roll" price="8K"></x-bakery.bigcard>
                <x-bakery.bigcard photo="GreekBread" name="Greek Yogurt Bread" price="25K"></x-bakery.bigcard>
                <x-bakery.bigcard photo="TiramisuDonut" name="Tiramisu Donut" price="18K"></x-bakery.bigcard>

                <x-bakery.bigcard photo="Challah" name="Challah" price="12K"></x-bakery.bigcard>
                <x-bakery.bigcard photo="GlutenSourdough" name="Gluten Free Sourdough" price="30K"></x-bakery.bigcard>
                <x-bakery.bigcard photo="Cheddarbagels" name="Cheddar Jalapeno Bagel" price="15K"></x-bakery.bigcard>
                <x-bakery.bigcard photo="Croissant" name="Croissant" price="20K"></x-bakery.bigcard>
                <x-bakery.bigcard photo="Focaccia" name="Focaccia" price="30K"></x-bakery.bigcard>
                <x-bakery.bigcard photo="Pizza" name="Pizza" price="30K"></x-bakery.bigcard>
                <x-bakery.bigcard photo="VeganBagels" name="Vegan Cream Cheese Bagel" price="23K"></x-bakery.bigcard>
                <x-bakery.bigcard photo="DinnerRolls" name="Dinner Roll" price="8K"></x-bakery.bigcard>
                <x-bakery.bigcard photo="GreekBread" name="Greek Yogurt Bread" price="25K"></x-bakery.bigcard>
                <x-bakery.bigcard photo="TiramisuDonut" name="Tiramisu Donut" price="18K"></x-bakery.bigcard>
        </div>

        <div class="flex justify-center ">
            <a href="{{ route('product') }}">
                <button class="cursor-pointer font-[poppins] flex text-sm bg-[#88481E] py-3 px-15 rounded-3xl self-start text-[#FFF8F0]">
                    Discover all menus </button>
            </a>
        </div>
    </div>

    <div class="flex flex-col items-center">
        <div class=" pb-20">
            <p class="text-center text-[64px] font-['Playfair_Display'] text-[#522C12] ">Why our customer love<br> Bright Place</p>
        </div>

        <div class="flex  gap-[55px]">

            <div class="flex items-center">
                <button class="swiper-button-prev-custom cursor-pointer bg-[#88481E] rounded-full size-[50px] flex items-center justify-center">
                    <img class="size-[30px] pr-[3px]" src="/assets/images/bakery/left.png">
                </button>
            </div>

            <div class="swiper testi-swiper w-[1100px]">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <x-bakery.testicard photo="TiramisuDonut" testi="The bread is delicious, fresh, and clearly made with care. The texture is soft, the flavor is well-balanced and not overpowering, and the quality is consistent every time I order. The packaging is neat and the delivery is always on time, making the whole experience truly satisfying and leaving me eager to order again." profile="profile" username="Tiffany Miller"></x-bakery.testicard>
                    </div> 

                    <div class="swiper-slide">
                    <x-bakery.testicard photo="Croissant" testi="I’m really picky when it comes to croissants, but this one genuinely made me fall in love. The layers are clearly defined, the texture is light yet still beautifully buttery. It’s not dry, not dense, and the aftertaste is incredibly satisfying." profile="profile2" username="andrewww"></x-bakery.testicard>
                    </div>

                    <div class="swiper-slide">
                    <x-bakery.testicard photo="GlutenSourdough" testi="The gluten-free sourdough is surprisingly good. The texture is soft with a nice chew, the crust is just right, and the flavor has a gentle tang that feels well-balanced. It doesn’t feel heavy at all, which is rare for gluten-free bread." profile="profile3" username="walterobrian"></x-bakery.testicard>
                    </div>

                    <div class="swiper-slide">
                    <x-bakery.testicard photo="pizza" testi="You can really taste the quality in this pizza. The dough has great texture, the sauce is flavorful without overpowering, and the toppings complement each other perfectly." profile="profile4" username="@valentinaas"></x-bakery.testicard>
                    </div>
                </div>
            </div>

            <div class="flex items-center ">
                <button class="swiper-button-next-custom cursor-pointer bg-[#88481E] rounded-full w-[50px] h-[50px] flex items-center justify-center">
                    <img class="size-[30px] pl-[3px]" src="/assets/images/bakery/right.png">
                </button>
            </div>
        </div>
    </div>

    <div class="flex justify-center items-center ">
        <div class="flex flex-col gap-[60px] pr-[80px]">
            <div class="w-[750px] h-[120px]">
                <p class="font-['Playfair_Display'] text-[#522C12] text-[52px]">Every bake is made with heart, so you can feel it in every bite.</p>
            </div>
            <div class="w-[700px] h-[115px]">
                <p class="font-[poppins] text-[#522C12] text-[24px]">Warm breads, soft pastries, and sweet bites baked fresh and shared with care.</p>
            </div>
        </div>
        <div class="">
            <img class="size-[500px] rounded-2xl" src="/assets/images/bakery/bomboloni.jpg">
        </div>  
    </div>

    <div class="flex justify-center">
        <div class="relative">
            <img class="w-[1355px] h-[430px] rounded-2xl object-cover" src="/assets/images/bakery/Croissants.jpg">

            <div class="absolute inset-0 opacity-40 bg-black rounded-2xl"></div>

                <div class="absolute inset-0 flex justify-center items-center flex-col gap-[40px]">

                    <p class="font-['Playfair_Display'] text-[#FFF8F0] text-[64px]">Stay up to date</p>

                    <div class="relative font-[poppins]">
                        <input type="email" placeholder="Enter your email" wire:model="email" id="email"
                        class="w-[700px] h-[60px] px-10 text-[18px] pr-65 rounded-full bg-[#FFF8F0] text-black ">

                        <button class="cursor-pointer w-[215px] h-[60px] text-[20px] absolute right-0 rounded-r-full bg-[#88481E] text-[#FFF8F0]">SUBMIT →</button>
                    </div>

                    <div class="flex justify-center items-center gap-[30px]">
                        <input type="checkbox" class="w-4 h-4 border-0 accent-[#FFF8F0] bg-[#FFF08F0] cursor-pointer">
                        <label class="text-[#FFF8F0] font-[poppins] ">I confirm I want to recieve the Bright Place newsletter</label>
                    </div>
                </div>
        </div>
    </div>

    <div>
        <x-bakery.footer></x-bakery.footer>
    </div>

</div>

<style>

.animate-scroll {
    width: max-content;
    animation: scroll-left 60s linear infinite;
}


</style>

<script>
    var swiper = new Swiper (".testi-swiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        speed: 600,

        navigation: {
            nextEl: ".swiper-button-next-custom",
            prevEl: ".swiper-button-prev-custom"
        }
    });


</script>
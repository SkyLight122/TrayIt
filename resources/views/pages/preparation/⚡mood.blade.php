<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\CakeType;

new class extends Component
{
    #[Computed]
    public function moods(){
        return CakeType::all();
    }
};
?>

<div class="min-h-screen bg-[#FFF8F0] py-10 flex flex-col justify-around relative overflow-hidden">

    <div class="lg:hidden absolute bottom-[-50%] left-1/2 -translate-x-1/2
               w-[280%] h-[130%] rounded-full"
        style="background: radial-gradient(circle, #AE693B 35%, #FFF8F0 60%);">
    </div>
    
    <div class="lg:flex items-center justify-between px-15">
        <h1 class="text-[#AE693B] font-semibold lg:text-5xl text-3xl lg:text-left text-center z-20">What are you <br> craving right now?</h1>
        <div class="hidden sm:flex flex gap-2">
            <div class="w-17 h-17 rounded-full border-3 border-[#AE693B] flex items-center justify-center">
                <img src="{{ asset('images/Cake.png') }}" class="w-9 h-12"/>
            </div>
            
            <div class="w-17 h-17 rounded-full border-3 border-[#AE693B] flex items-center justify-center">
                <img src="{{ asset('images/Bread.png') }}" class="w-12 h-12"/>
            </div>

            <div class="w-17 h-17 rounded-full border-3 border-[#AE693B] flex items-center justify-center">
                <img src="{{ asset('images/Pastry.png') }}" class="w-12 h-12"/>
            </div>

            <div class="w-17 h-17 rounded-full border-3 border-[#AE693B] flex items-center justify-center">
                <img src="{{ asset('images/Cookie.png') }}" class="w-12 h-13"/>
            </div>

            <div class="w-17 h-17 rounded-full border-3 border-[#AE693B] flex items-center justify-center">
                <img src="{{ asset('images/Dessert.png') }}" class="w-12 h-12"/>
            </div>
            
            <div class="w-17 h-17 rounded-full border-3 border-[#AE693B] flex items-center justify-center">
                <img src="{{ asset('images/Savory.png') }}" class="w-12 h-12"/>
            </div>
        </div>
    </div>

    

    <div class="swiper w-full">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-name="Cake">
                <img src="{{ asset('images/Cake.png') }}" class="lg:w-70 w-50 mx-auto">
            </div>

            <div class="swiper-slide" data-name="Bread">
                <img src="{{ asset('images/Bread.png') }}" class="lg:w-90 w-70 mx-auto">
            </div>

            <div class="swiper-slide" data-name="Pastry">
                <img src="{{ asset('images/Pastry.png') }}" class="lg:w-85 w-65 mx-auto">
            </div>

            <div class="swiper-slide" data-name="Cookie">
                <img src="{{ asset('images/Cookie.png') }}" class="lg:w-95 w-75 mx-auto">
            </div>

            <div class="swiper-slide" data-name="Dessert">
                <img src="{{ asset('images/Dessert.png') }}" class="lg:w-90 w-70 mx-auto">
            </div>

            <div class="swiper-slide" data-name="Savory">
                <img src="{{ asset('images/Savory.png') }}" class="lg:w-100 w-80 mx-auto">
            </div>
        </div>
    </div>

    <div class="flex justify-center font-semibold z-20">
        <button id="categoryButton" class="mt-6 w-40 px-6 py-2 border-2 rounded-lg text-center 
        text-[#FFF8F0] border-[#FFF8F0] hover:bg-[#FFF8F0] hover:text-[#AE693B]
        lg:text-[#AE693B] lg:border-[#AE693B] lg:hover:bg-[#AE693B] lg:hover:text-[#FFF8F0]">Cake</button>
    </div>

</div>

<style>


    .swiper-slide-active {
  filter: blur(0x);
}

    .swiper-pagination-bullet,
    .swiper-pagination-bullet-active {
    background: #88481E;
}

    .swiper-slide {
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: end;
        margin-top: 50px;
}
</style>

<script>
    const button = document.getElementById("categoryButton");
    //Cari elemen HTML yang mempunyai id = categoryButton


   var swiper = new Swiper(".swiper", {
        effect: "coverflow",
        //ini untuk effect jadi slide tengah paling fokus dan kirikanan jadi miring kebelakang
        grabCursor: true,
        //untuk ubah bentuk cursor jadi bentuk tangan yang genggam
        centeredSlides: true,
        //jadi slide yang aktif adalah slide yang ditengah
        slidesPerView: "1",
        //ini buat ngatur berapa tampilan yang muncul dihalaman
        slideToClickedSlide: true,
        //fungsinya untuk animasi tinggal klik aja 
        slidesPerView: 1, // DEFAULT HP

        breakpoints: {
            768: {
                slidesPerView: 2,
            }
        },
        
        coverflowEffect: {
            rotate: 0,
            stretch: 80,
            //jarak antar slide
            depth: 100,
            //makin besar makin kebelakang slidenya
            modifier: 2,
            //makin besar makin kuat effectnya
            slideShadows: false,
            //ini buat bayangan
            blur: 10,
            //buat blur pada slide yang tidak aktif
            scale: 0.85,
            //ini buat jadiin slide yang tidak aktif menjadi lebih kecil

        },
        loop: true,



    on: {
        slideChange: function () {
            const activeSlide = this.slides[this.activeIndex];
            // ambil slide yang sedang aktif
            const name = activeSlide.dataset.name;
            //ini ambil data nama dari slide yang aktif
            button.textContent = name;
            // ganti teks button dengan slide yang aktif yang diambil dari nilai name
        }
    }
});
</script>





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

<div class="bg-[#FFF8F0] min-h-screen">
    <div>
    <h1 class="text-[#88481E] font-[montserrat] font-semibold pl-15 pt-15 text-5xl">What are you <br> craving right now?</h1>
    </div>

    
    <div class="absolute top-[70px] right-[60px] w-17 h-17 rounded-full border-3 border-amber-800 bg-[#FFF8F0] flex items-center justify-center">
        <img src="{{ asset('images/Savory.png') }}" class="w-12 h-12"/>
    </div>

    <div class="absolute top-[70px] right-[140px] w-17 h-17 rounded-full border-3 border-amber-800 bg-[#FFF8F0] flex items-center justify-center">
        <img src="{{ asset('images/Dessert.png') }}" class="w-12 h-12"/>
    </div>

    <div class="absolute top-[70px] right-[220px] w-17 h-17 rounded-full border-3 border-amber-800 bg-[#FFF8F0] flex items-center justify-center">
        <img src="{{ asset('images/Cookie.png') }}" class="w-12 h-13"/>
    </div>

    <div class="absolute top-[70px] right-[300px] w-17 h-17 rounded-full border-3 border-amber-800 bg-[#FFF8F0] flex items-center justify-center">
        <img src="{{ asset('images/Pastry.png') }}" class="w-12 h-12"/>
    </div>

    <div class="absolute top-[70px] right-[380px] w-17 h-17 rounded-full border-3 border-amber-800 bg-[#FFF8F0] flex items-center justify-center">
        <img src="{{ asset('images/Bread.png') }}" class="w-12 h-12"/>
    </div>

    <div class="absolute top-[70px] right-[460px] w-17 h-17 rounded-full border-3 border-amber-800 bg-[#FFF8F0] flex items-center justify-center">
        <img src="{{ asset('images/Cake.png') }}" class="w-9 h-12"/>
    </div>

    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-name="Cake">
                <img src="/images/Cake.png" class="w-80 mx-auto">
            </div>

            <div class="swiper-slide" data-name="Bread">
                <img src="/images/Bread.png" class="w-100 mx-auto">
            </div>

            <div class="swiper-slide" data-name="Pastry">
                <img src="/images/Pastry.png" class="w-95 mx-auto">
            </div>

            <div class="swiper-slide" data-name="Cookie">
                <img src="/images/Cookie.png" class="w-105 mx-auto">
            </div>

            <div class="swiper-slide" data-name="Dessert">
                <img src="/images/Dessert.png" class="w-100 mx-auto">
            </div>

            <div class="swiper-slide" data-name="Savory">
                <img src="/images/Savory.png" class="w-110 mx-auto">
            </div>
        </div>
    </div>

    <div class="flex justify-center font-[montserrat] font-semibold">
    <button id="categoryButton" class="mt-6 w-[160px] px-6 py-2 border-2 rounded-lg text-center text-[#88481E] border-[#88481E]">Cake</button>
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
        slidesPerView: "2",
        //ini buat ngatur berapa tampilan yang muncul dihalaman
        slideToClickedSlide: true,
        //fungsinya untuk animasi tinggal klik aja 
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
            scale: 0.9,
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





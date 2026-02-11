 <?php

use Livewire\Component;

new class extends Component {
    //
};
?>
<div>
    <x-landing.header></x-landing.header>
    <section id="home" class="scroll-mt-24">

        <div class="pt-6 px-4 sm:px-8 lg:px-12">
            <div class="relative w-full h-[420px] sm:h-[520px] md:h-[580px] rounded-2xl overflow-hidden bg-cover bg-center"
                style="background-image: url('{{ asset('images/landing_hero.png') }}')">

                <div
                    class="absolute bottom-20 sm:bottom-8 md:bottom-16 left-0 z-10 p-6 sm:p-10 md:p-14 text-white max-w-2xl">

                    <h1 class="text-2xl sm:text-4xl md:text-5xl font-semibold leading-tight drop-shadow-lg">
                        Launch your website in one minute
                    </h1>

                    <p class="mt-3 text-sm sm:text-base md:text-lg font-light drop-shadow-md">
                        Efficiently manage your order and boost productivity.
                    </p>

                    <p class="mt-4 text-sm sm:text-base md:text-lg font-light drop-shadow-md">
                        From <span class="font-semibold">Rp150.000</span>/mo
                    </p>
                    <p class="-mt-1 text-sm sm:text-base md:text-lg font-light drop-shadow-md">
                        + 3 mo. free
                    </p>

                    <button
                        class="mt-5 bg-[#1A76FF] hover:bg-blue-600 transition rounded-xl px-6 py-3 text-sm sm:text-base md:text-lg shadow-lg cursor-pointer">
                        See Offer
                    </button>

                </div>
            </div>
        </div>
    </section>

    <div class="py-10 sm:py-14 lg:py-12 text-center px-4">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-semibold text-black">Domains designed for
                <br> bakers who refuse to settle
            </h1>
            <p class="sm:mt-4 text-sm sm:text-base md:text-lg text-gray-400 mt-3 ">Your dream. Your journey. Tray It
                is ready to become the part of your bakery's journey</p>
        </div>
    </div>


    <div class="overflow-x-hidden relative">
        <div class="w-full">
            <div class="flex pt-10 sm:pt-16 gap-4 sm:gap-6 [animation:var(--animate-scroll-left)]">
                <x-landing.bakerycard image="images/bakery1.png" logo="images/logo1.png"></x-landing.bakerycard>
                <x-landing.bakerycard image="images/bakery1.png"></x-landing.bakerycard>
                <x-landing.bakerycard image="images/bakery1.png"></x-landing.bakerycard>
                <x-landing.bakerycard image="images/bakery1.png"></x-landing.bakerycard>
                <x-landing.bakerycard image="images/bakery1.png"></x-landing.bakerycard>
                <x-landing.bakerycard image="images/bakery1.png"></x-landing.bakerycard>

                <x-landing.bakerycard image="images/bakery1.png" logo="images/logo1.png" />
                <x-landing.bakerycard image="images/bakery1.png" />
                <x-landing.bakerycard image="images/bakery1.png" />
                <x-landing.bakerycard image="images/bakery1.png" />
                <x-landing.bakerycard image="images/bakery1.png" />
                <x-landing.bakerycard image="images/bakery1.png" />
            </div>
        </div>

        <div class="w-full">
            <div class="flex pt-6 sm:pt-8 gap-4 sm:gap-6 [animation:var(--animate-scroll-right)]">
                <x-landing.bakerycard image="images/bakery1.png" logo="images/logo1.png"></x-landing.bakerycard>
                <x-landing.bakerycard image="images/bakery1.png"></x-landing.bakerycard>
                <x-landing.bakerycard image="images/bakery1.png"></x-landing.bakerycard>
                <x-landing.bakerycard image="images/bakery1.png"></x-landing.bakerycard>
                <x-landing.bakerycard image="images/bakery1.png"></x-landing.bakerycard>
                <x-landing.bakerycard image="images/bakery1.png"></x-landing.bakerycard>
                <x-landing.bakerycard image="images/bakery1.png"></x-landing.bakerycard>
                <x-landing.bakerycard image="images/bakery1.png"></x-landing.bakerycard>
                <x-landing.bakerycard image="images/bakery1.png"></x-landing.bakerycard>

                <x-landing.bakerycard image="images/bakery1.png" logo="images/logo1.png"></x-landing.bakerycard>
                <x-landing.bakerycard image="images/bakery1.png"></x-landing.bakerycard>
                <x-landing.bakerycard image="images/bakery1.png"></x-landing.bakerycard>
                <x-landing.bakerycard image="images/bakery1.png"></x-landing.bakerycard>
                <x-landing.bakerycard image="images/bakery1.png"></x-landing.bakerycard>
                <x-landing.bakerycard image="images/bakery1.png"></x-landing.bakerycard>
                <x-landing.bakerycard image="images/bakery1.png"></x-landing.bakerycard>
                <x-landing.bakerycard image="images/bakery1.png"></x-landing.bakerycard>
                <x-landing.bakerycard image="images/bakery1.png"></x-landing.bakerycard>
            </div>
        </div>
        <div
            class="pointer-events-none absolute inset-y-0 left-0 w-24 sm:w-32 lg:w-40
            bg-gradient-to-r from-white to-transparent z-20">
        </div>

        <div
            class="pointer-events-none absolute inset-y-0 right-0 w-24 sm:w-32 lg:w-40
            bg-gradient-to-l from-white to-transparent z-20">
        </div>
    </div>




    <div class="flex justify-center flex-col w-full text-center pt-16">
        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-semibold text-black">Why Tray It?</h1>
        <p class="sm:mt-4 text-sm sm:text-base md:text-lg text-gray-400 mt-3 pb-10">Manage your bakery business
            through a platform built for
            <br> simplicity, efficiency, security, and ongoing support all in one place
        </p>
    </div>

    <div class="w-full px-4 sm:px-6 lg:px-12 xl:px-20 2xl:px-32">
        <div class="flex flex-col lg:flex-row gap-6 max-w-[1400px] mx-auto items-stretch">

            <div class="grid grid-cols-2 gap-4 sm:gap-6 lg:flex lg:flex-col lg:w-1/2 order-2 lg:order-1 h-full">
                <x-landing.largeinfocardx title="Easy Domain Management"
                    desc="Manage, renew, and control your domain effortlessly from one simple dashboard."
                    image="images/blueicon2.png"></x-landing.largeinfocardx>

                <x-landing.largeinfocardx title="Budget Friendly Pricing"
                    desc="Get premium domain services at prices that fit your budget."
                    image="images/blue2.png"></x-landing.largeinfocardx>
            </div>

            <div class="lg:w-1/2 order-1 lg:order-2 flex">
                <x-landing.largeinfocardy title="Security & Performance"
                    desc="Built with robust security and high-performance systems to keep your domains safe and always accessible."
                    image="images/icon.png"></x-landing.largeinfocardy>
            </div>
        </div>
    </div>

    <section id="features" class="scroll-mt-4">

        <div class="flex justify-center flex-col w-full text-center pt-16">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-semibold text-black">Our Features</h1>
            <p class="sm:mt-4 text-sm sm:text-base md:text-lg text-gray-400 mt-3 pb-2">Features designed to make
                your experience smooth, efficient, and
                <br> dependable.
            </p>
        </div>

        <div class="flex justify-center items-center pt-2 px-4">
            <div class="grid grid-cols-2 lg:grid-cols-10 gap-y-14 gap-x-10 max-w-7xl w-full">

                <div class="col-span-2 lg:col-span-2 flex justify-center">
                    <x-landing.featurescard image="images/preorder.png" title="Sistem Pre-Order (Pickup)"
                        subtitle="Fill short description with 1 short sentence" />
                </div>

                <div class="col-span-1 lg:col-span-2 flex justify-center">
                    <x-landing.featurescard image="images/domain.png" title="Domain and Server"
                        subtitle="Fill short description with 1 short sentence" />
                </div>

                <div class="col-span-1 lg:col-span-2 flex justify-center">
                    <x-landing.featurescard image="images/ui.png" title="Desain Website & UI Profesional"
                        subtitle="Fill short description with 1 short sentence" />
                </div>

                <div class="col-span-1 lg:col-span-2 flex justify-center">
                    <x-landing.featurescard image="images/website.png" title="Halaman Website Lengkap"
                        subtitle="Fill short description with 1 short sentence" />
                </div>

                <div class="col-span-1 lg:col-span-2 flex justify-center">
                    <x-landing.featurescard image="images/data.png" title="Manajemen Produk & Kategori"
                        subtitle="Fill short description with 1 short sentence" />
                </div>


                <div class="hidden lg:block lg:col-span-1"></div>

                <div class="col-span-1 lg:col-span-2 flex justify-center">
                    <x-landing.featurescard image="images/dashboard.png" title="Dashboard Admin"
                        subtitle="Fill short description with 1 short sentence" />
                </div>

                <div class="col-span-1 lg:col-span-2 flex justify-center">
                    <x-landing.featurescard image="images/notification.png" title="Notifikasi Pesanan"
                        subtitle="Fill short description with 1 short sentence" />
                </div>

                <div class="col-span-1 lg:col-span-2 flex justify-center">
                    <x-landing.featurescard image="images/security.png" title="Keamanan & Performa"
                        subtitle="Fill short description with 1 short sentence" />
                </div>

                <div class="col-span-1 lg:col-span-2 flex justify-center">
                    <x-landing.featurescard image="images/support.png" title="Maintenance & Support"
                        subtitle="Fill short description with 1 short sentence" />
                </div>

                <div class="hidden lg:block lg:col-span-1"></div>
            </div>
        </div>
    </section>

    <section id="service">
        <div class="pt-16">
            <x-landing.subscriptioncard></x-landing.subscriptioncard>
        </div>
    </section>

    <div class="">
        <x-landing.footer></x-landing.footer>
    </div>
</div>

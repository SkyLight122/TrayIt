<?php

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

new class extends Component {
    public $email, $password;

    public function login()
    {
        $this->resetErrorBag();

        $this->validate(
            [
                'email' => 'required|email|string|max:255',
                'password' => 'required|string|min:8',
            ],
            [
                'email.required' => 'Email address is required.',
                'email.email' => 'Please enter a valid email address.',
                'email.max' => 'Your email is too long.',
                'password.required' => 'Password is required.',
                'password.min' => 'Password must be at least 8 characters.'
            ]
        );

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $this->addError('password', 'The provided credentials do not match our records.');
            return;
        }

        session()->regenerate();
    }
};
?>

<div class="flex max-h-screen">
    <div class="w-5/12 relative">

        <div class="swiper h-full z-0">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="{{ asset('images/Login1.jpg') }}" class="w-full h-194 object-cover">
                </div>

                <div class="swiper-slide">
                    <img src="{{ asset('images/Login2.jpg') }}" class="w-full h-194 object-cover">
                </div>

                <div class="swiper-slide">
                    <img src="{{ asset('images/Login3.jpg') }}" class="w-full h-194 object-cover">
                </div>

            </div>
        </div>

        <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-transparent z-10 pointer-events-none"></div>

        <div class="absolute top-10 left-8 text-white z-20">
            <h1 class="font-bold font-[montserrat] text-3xl pb-5">Tray It</h1>
        </div>
        
        <div class="absolute bottom-10 left-8 text-white z-20">
            <h1 class="font-bold font-[montserrat] text-5xl pb-5">Start your <br> journey with Tray It</h1>
            <p class="text-[19px] font-[montserrat]">Discover all partner bakeries on our domain that <br> match your cravings.</p>
        </div>
    </div>

    {{-- fungsi z-0 z-10 z-20 ini gunanya untuk seperti layer jadi jika z-0 itu akan menjadi layer paling belakang --}}



    <div class="w-7/12 flex flex-col justify-center items-center">
        <div class="">
            <h1 class="font-bold font-[montserrat] text-4xl pb-2">Welcome back to Tray it</h1>
            <p class="text-[18px] font-[montserrat] text-center pb-6">Discover all partner bakeries on our <br> powerful domain.</p>
        </div>
        
        <form wire:submit.prevent="login">
        {{-- ikut function atasnya --}}
            <x-input name="email" type="email">Email</x-input>
            <x-input name="password" type="password">Password</x-input>
            <button type="submit" class="py-4 px-[215px] rounded-xl bg-[#1A76FF] text-white font-semibold font-[montserrat]">Log in</button>
        </form>

        <div class="pt-6">
            <p class="text-[18px] font-[montserrat] text-center pb-10">Don’t have account yet? 
            <a href="/register" class="font-semibold text-[#1A76FF]">Register</a></p>
        </div>
    </div>
</div>

<script>
    const savedSlide = sessionStorage.getItem('authSlide') ?? 0;
    //sessionstorage ini dari bawaan browser jadi ini fungsinya itu buat nyimpan data kecil bawaan browser sementara
    //sessionStorage.getItem('authSlide') = dia akan ambil data authslide dari sessionStorage jadi datanya akan kesimpan
    //jika tidak ada datanya maka akan pakai 0 / pertama


    const authSwiper = new Swiper('.swiper', {
        loop: true,
        effect: 'fade',
        speed: 1000,
        initialSlide: savedSlide,
        //jadi ini itu gunanya jika swiper jalan maka ia akan mulai dari savedSlide keberapa... yang terakhir disimpan
        //jika initialSlide: 0; maka ia akan mulai dari yang pertama
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
    });
    // const authSwiper ini adalah variabel agar bisa dipanggil ataupun baca slide aktif

    // setiap slide berubah → simpan index
    authSwiper.on('slideChange', () => {
        sessionStorage.setItem('authSlide', authSwiper.realIndex);
    });
    //jadi setiap kali authSwiper mengalami slideChange maka simpan slidenya ke sessionstorage

</script>
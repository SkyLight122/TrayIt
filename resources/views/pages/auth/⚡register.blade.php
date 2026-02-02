<?php

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

new class extends Component {
    use WithFileUploads;
    public $username, $full_name, $phone_number, $image, $email, $password, $confirm_password;

    public function register()
    {
        $this->resetErrorBag();

        $this->validate(
            [
                'username' => 'required|string|max:255|unique:users,username',
                'full_name' => 'required|string|max:255',
                'phone_number' => 'required|digits_between:9,12',
                'email' => 'required|email|string|max:255|unique:users,email',
                'password' => 'required|string|min:8',
                'confirm_password' => 'required|string|min:8|same:password',
            ],
            [
                'username.required' => 'Username is required.',
                'username.unique' => 'This username is already taken.',

                'full_name.required' => 'Full name is required.',

                'phone_number.required' => 'Phone number is required.',
                'phone_number.digits_between' => 'Phone number must contain between 9 and 12 digits.',

                'email.required' => 'Email address is required.',
                'email.email' => 'Please enter a valid email address.',
                'email.unique' => 'This email address is already registered.',

                'password.required' => 'Password is required.',
                'password.min' => 'Password must be at least 8 characters long.',

                'confirm_password.required' => 'Password confirmation is required.',
                'confirm_password.same' => 'Password confirmation does not match.',
            ],
        );

        $image_path = null;

        if ($this->image) {
            $this->validate(
                [
                    'image' => 'file|image|max:2048|mimes:jpg,jpeg,png',
                ],
                [
                    'image.image' => 'The uploaded file must be an image.',
                    'image.mimes' => 'Image format must be JPG or PNG.',
                    'image.max' => 'Image size must not exceed 2MB.'
                ],
            );
            $image_path = $this->image->store('photo_profile', 'public');
        }
        User::create([
            'username' => $this->username,
            'full_name' => $this->full_name,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'image_path' => $image_path ?: null,
        ]);
    }
};
?>

<div class="flex min-h-screen">
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


    <div class="w-7/12 flex flex-col justify-center items-center pt-8">
        <div class="">
            <h1 class="font-bold font-[montserrat] text-4xl pb-2">Create your account</h1>
            <p class="text-[18px] font-[montserrat] text-center pb-6">Join Tray It and start your website easily.</p>
        </div>
        
        <form wire:submit.prevent="register">
            {{-- ikut function atasnya --}}
            <x-input name="username" type="username">User name</x-input>
            <x-input name="full_name" type="full_name">Full name</x-input>
            <x-input name="phone_number" type="phone_number">Phone number</x-input>
            <x-input name="email" type="email">Email</x-input>
            <x-input name="password" type="password">Password</x-input>
            <x-input name="confirm_password" type="confirm_password">Confirm password</x-input>
            <button type="submit" class="py-4 px-[207px] rounded-xl bg-[#1A76FF] text-white font-semibold font-[montserrat]">Register</button>
        </form>

        <div class="pt-6">
            <p class="text-[18px] font-[montserrat] text-center pb-10 ">Have an account? 
            <a href="/login" class="font-semibold text-[#1A76FF]">Login</a></p>
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
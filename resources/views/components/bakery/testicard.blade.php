@props ([
    'photo' => '',
    'testi' => '',
    'username' => '',
    'profile' => ''
])


<div class="flex gap-[35px] ">
    <div class="flex">
        <img class="size-[380px] rounded-xl object-cover" src="/assets/images/bakery/{{ $photo }}.jpg">
    </div>

    <div class="flex flex-col justify-center items-center w-[690px] h-[357px] gap-[20px]">
        <div>
        <p class="w-[600px] font-medium text-[#88481E] text-[20px] font-[poppins]">“{{ $testi }}”</p>
        </div>

        <div class="border-t border-1 border-[#C68B65] w-[595px]"></div>
        
        <div class="w-[587px] h-[70px] flex items-start">
            <div class="flex items-center justify-center gap-5">
                <div class="">
                    <img class="size-[70px] rounded-full object-cover" src="/assets/images/bakery/{{ $profile }}.jpg">
                </div>

                <div class="font-[poppins] ">
                    <p class="font-medium text-[#522C12] text-[20px]">{{ $username }} </p>
                    <p class=" text-[20px] text-[#905A37]"> @tiff </p>
                </div>
            </div>
        </div>
    </div>
</div>
@props ([
    'photo' => '',
    'name' => '',
    'price' => ''
])

<div class="font-[poppins] w-[180px] flex-shrink-0">
    <div class="zoom-wrapper">
    <img class="" src="/assets/images/bakery/{{ $photo }}.jpg">
    </div>

    <div class="flex items-center py-3">
        <div class="pr-2 px-4">
            <p class=" text-[13px] text-[#88481E] w-17 line-clamp-2">{{ $name }}</p>
        </div>

        <div class="border-l border-[#D5A789] h-10"></div>

        <div class="pl-2">
            <p class="text-[#88481E] text-[18px] font-semibold">Rp {{ $price }}</p>
            <p class="text-[#88481E] text-[10px]">Order Now ↗</p>
        </div>
    </div>
</div>

<style>
    .zoom-wrapper {
        width: 180px;
        height: 180px;
        overflow: hidden;
        border-radius: 24px;
    }

    .zoom-wrapper img {
        object-fit: cover;
        transition:transform 0.3s;
    }

    .zoom-wrapper:hover img {
        transform: scale(1.05);
    }
</style>
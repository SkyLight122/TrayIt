@props ([
    'photo' => '',
    'name' => '',
    'price' => ''
])

<div class="zoom-wrapper font-[poppins] w-[260px] flex-shrink-0 cursor-pointer ">
    <div class="image">
    <img class="" src="/assets/images/bakery/{{ $photo }}.jpg">
    </div>

    <div class="flex items-center py-3">
        <div class="pr-2 px-5">
            <p class="text-[20px] text-[#88481E] w-25 line-clamp-2">{{ $name }}</p>
        </div>

        <div class="border-l border-[#D5A789] h-12"></div>

        <div class="pl-6">
            <p class="text-[#88481E] text-xl font-semibold">Rp {{ $price }}</p>
            <p class="text-[#88481E] text-sm">See more ↗</p>
        </div>
    </div>
</div>

<style>
    .image {
        width: 240px;
        height: 240px;
        overflow: hidden;
        border-radius: 24px;
    }

    .zoom-wrapper img {
        object-fit: cover;
        transition:transform 0.8s;
    }

    .zoom-wrapper:hover img {
        transform: scale(1.1);
    }
</style>
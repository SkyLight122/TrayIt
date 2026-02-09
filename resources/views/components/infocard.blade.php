@props([
    'title' => 'No Title',
    'subtitle' => null,
    'desc' => 'No Desc',
    'sub_desc' => 'No Sub Desc',
])
<div class="group w-full flex justify-center lg:mb-0 mb-5">
    <div class=" lg:w-full md:max-w-2xl px-4 sm:px-6 md:px-10 py-6 sm:py-8 rounded-3xl transition-all duration-300 ease-out lg:hover:bg-gray-200 
    lg:bg-white bg-gray-200 w-95">

        <h1 class="text-[#1A76FF] font-bold text-lg">{{ $title }}</h1>

        @if ($subtitle)
            <div class="overflow-hidden transition-all duration-300 max-h-20 md:max-h-0 md:group-hover:max-h-20">
                <p class="text-black py-2 text-base sm:text-lg font-normal opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-300">
                    {{ $subtitle }}
                </p>
            </div>
        @endif

        @if ($desc)
            <p class="text-gray-500 font-normal text-sm sm:text-base">{{ $desc }}</p>
        @endif

        @if ($sub_desc)
            <p class="text-gray-500 font-normal text-sm sm:text-base">{{ $sub_desc }}</p>
        @endif

    </div>
</div>

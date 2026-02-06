@props([
    'title' => 'No Title',
    'desc' => 'No Desc',
    'image' => ''
])

<div class="w-full h-full">
    <div class="w-full h-full min-h-[260px] lg:min-h-[280px] border-2 rounded-2xl border-gray-300 flex flex-col sm:flex-row overflow-hidden">
        <div class="flex flex-col px-6 sm:px-8 py-6 sm:py-8 flex-1">
            <h1 class="text-xl sm:text-3xl lg:text-4xl text-black font-normal leading-tight line-clamp-2">{{ $title }}</h1>
            <p class="text-sm sm:text-base text-gray-500 pt-4 leading-relaxed">{{$desc}}</p>
        </div>

        <div class="flex sm:w-1/3 items-end justify-center p-6">
            <img src="{{$image}}" class="w-16 sm:w-20 lg:w-24 h-auto">
        </div>
    </div>
</div>

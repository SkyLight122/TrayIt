@props([
    'title' => 'No Title',
    'desc' => 'No Desc',
    'image' => ''
])

<div>
    <div class="w-full h-full border-2 rounded-2xl border-gray-300 flex flex-col justify-between overflow-hidden">
        <div class="px-6 sm:px-8 py-6 sm:py-8">
            <h1 class="text-2xl sm:text-3xl lg:text-4xl text-black font-normal">{{$title}}</h1>
            <p class="text-sm sm:text-base text-gray-500 pt-4 leading-relaxed">{{$desc}}</p>
        </div>

        <div class="flex justify-end items-end p-6 sm:p-8">
            <img src="{{$image}}" class="w-20 sm:w-28 lg:w-36 h-auto">
        </div>
    </div>
</div>

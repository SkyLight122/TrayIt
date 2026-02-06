@props([
    'image' => '',
    'title' => 'No title',
    'subtitle' => 'No subtitle'
])
<div>
    <div class="flex flex-col items-center text-center w-full px-2">
        <img src="{{$image}}" class="w-16 h-16 rounded-2xl bg-blue-500 p-3 object-contain">
        <h1 class="text-black mt-4">{{$title}}</h1>
        <p class="text-gray-500 mt-2 max-w-[140px]">{{$subtitle}}</p>
    </div>
</div>

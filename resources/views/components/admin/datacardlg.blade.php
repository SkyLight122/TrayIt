@props([
    'title' => 'No title',
    'title2' => '',
    'counter' => '500',
    'subtitle' => '',
])


<div class="flex flex-col rounded-xl w-84 h-22 p-4 bg-white custom-shadow">
    <div class="flex flex-row">
        <h1 class="text-blue-500 font-semibold">{{ $title }}</h1>
        <h1 class="text-gray-400 font-light pl-1">{{ $title2 }}</h1>
    </div>
    <div class="flex flex-row">
        <h1 class="text-2xl font-semibold">{{ $counter }}</h1>
        <h1 class="text-gray-500 font-semibold pt-3"><sub>{{ $subtitle }}</sub></h1>
    </div>
</div>

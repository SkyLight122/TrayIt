@props([
    'title' => 'No title',
    'counter' => '500',
    'subtitle' => 'menuu',
])


<div class="flex flex-col rounded-xl w-58 h-22 p-4 bg-white shadow-xl/10">
    <h1 class="text-blue-500 font-semibold">{{ $title }}</h1>
    <div class="flex flex-row">
        <h1 class="text-3xl font-semibold">{{ $counter }}</h1>
        <h1 class="text-gray-500 font-semibold pt-3"><sub>{{ $subtitle }}</sub></h1>
    </div>
</div>

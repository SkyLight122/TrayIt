@props([
    'image' => '',
    'title' => 'No title',
    'holder' => 'No holder',
    'type' => 'text',
    'full' => false,
])

<div class="{{ $full ? 'w-full' : '' }}">
    <label class="text-blue-600 font-semibold text-sm mb-1 block">
        {{ $title }}
    </label>

    <div class="relative">
        <img src="{{ $image }}" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 opacity-60">


        <input type="{{ $type }}" placeholder="{{$holder}}"
        {{ $attributes->merge([
        'class' => "w-full border-2 border-gray-500 rounded-lg pl-12 py-1 placeholder font-normal transition"
        ]) }}>

    </div>
</div>

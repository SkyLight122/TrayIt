@props ([
    'image' => '',
    'title' => '',
    'description' => ''
])

<div class="w-64 bg-white rounded-xl shadow-lg overflow-hidden shadow-2xl">
    
    <div class="h-40 overflow-hidden">
        <img
            src="{{ asset('storage/' . $image) }}"
            alt="{{ $title }}"
            class="w-full h-full object-cover"
        >
    </div>

    <div class="p-4">
        <h3 class="font-semibold text-lg text-gray-900">
            {{ $title }}
        </h3>

        <p class="text-sm text-gray-500 mt-1">
            {{ $description }}
        </p>
    </div>

</div>

@props ([
    'name' => '',
    'type' => 'text'
])

<div class="relative pb-5">
    <label for="{{ $name }}" class="absolute top-2 left-4 text-[10px] text-gray-600 font-[montserrat]"> {{ $slot }} </label>

    <input
        type="{{ $type }}"
        wire:model="{{ $name }}"
        id="{{ $name }}"
        class="
        w-120
        px-4
        pt-6
        pb-2
        text-[15px]
        rounded-xl
        border border-bl-800
        text-gray-600

        focus:outline-none
        focus:border-blue-700
        focus:ring-4
        focus:ring-blue-300/50
        "
    />

        @error($name)
        <p class="absolute  left-4 text-xs text-red-500">
            {{ $message }}
        </p>
    @enderror
</div>
@props([
    'image' => '',
    'name' => 'Unknown Bakery',
    'email' => '@dummyemail',
    'logo' => '',
])

<div class="flex flex-col shrink-0">
    <img src="{{ $image }}" class="w-40 h-24 sm:w-52 sm:h-32 mx-2 sm:mx-4 object-cover rounded-xl">

    <div class="flex flex-row mt-2">
        <img src="{{ $logo }}" class="w-8 h-8 sm:w-10 sm:h-10 rounded-full object-cover ml-2 sm:ml-6 mt-2">

        <div class="flex flex-col">
            <h1 class="font-semibold text-black pl-3 sm:pl-4 pt-1 text-sm sm:text-base">{{ $name }}</h1>
            <h1 class="font-thin text-gray-500 pl-3 sm:pl-4 text-xs sm:text-sm">{{ $email }}</h1>
        </div>
    </div>
</div>

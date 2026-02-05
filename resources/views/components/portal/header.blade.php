@props([
    'name' => ''
])

<div class="flex justify-around h-20 items-center">
    <p class="text-2xl font-bold text-[#1A76FF]">TrayIt</p>

    <div class="w-fit flex gap-20">
        <a href="/portal" class="font-light">Home</a>
        <a href="/features" class="font-light">Features</a>
        <a href="/service" class="font-light">Service</a>
    </div>

    
    <div class="bg-gray-100 rounded-full w-100 h-fit flex items-center pl-3">
    <img class="absolute size-6  bg-[#1A76FF] p-1.5 rounded-full" src="{{ asset('assets/images/portal/Search.png') }}">
        <input
        wire:model.live.300ms='{{ $name }}'
        id="search"
        type="text"
        placeholder="Search Bakery"
        class="shadow-none outline-none h-10 w-full ml-10 pb-0.5"
        />
    </div>

    <div class="gap-3 flex items-center">
        <p>James Doe</p>
        <div class="w-12 h-12 rounded-full overflow-hidden">
            <img src="{{ asset('assets/images/portal/Profile.jpg') }}">
        </div>
    </div>
</div>
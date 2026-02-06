<?php

use Livewire\Component;

new class extends Component {
    public int $value = 8;
};
?>

<div x-data="{ val: @entangle('value').live }" class="w-[360px] rounded-full bg-gray-100 p-3 flex items-center gap-3">
    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-400 shadow text-sm font-semibold">
        <span x-text="val"></span>
    </div>

    <input type="range" min="1" max="12" x-model="val"
        class="w-full h-2 bg-gray-300 rounded-full appearance-none accent-blue-500">

{{--  --}}


<div class="pt-2 px-4 sm:px-8 lg:px-12">
            <div class="relative w-full min-h-[520px] sm:min-h-[600px] md:min-h-[650px] rounded-2xl overflow-hidden bg-cover bg-center flex items-center"
                style="background-image: url('{{ asset('images/landing_hero.png') }}')">

                <div class="relative z-10 w-full flex flex-col md:flex-row justify-between items-start md:items-center px-6 sm:px-12">
                    <div class="max-w-xl text-white">
                        <h1 class="text-2xl sm:text-4xl md:text-5xl font-semibold leading-tight">
                            Launch your <br class="hidden sm:block"> website in one minute
                        </h1>

                        <p class="mt-4 text-sm sm:text-base md:text-lg font-light">
                            Efficiently manage your order and boost productivity.
                        </p>

                        <p class="mt-6 text-sm sm:text-base md:text-lg font-light">
                            From <span class="font-semibold">Rp150.000</span>/mo
                        </p>
                        <p class="-mt-1 text-sm sm:text-base md:text-lg font-light">+ 3 mo. free</p>
                    </div>

                    <div class="mt-8 md:mt-0">
                        <button
                            class="bg-blue-500 hover:bg-blue-600 transition rounded-xl px-8 py-3 text-white text-sm sm:text-base shadow-lg">
                            Claim deal
                        </button>
                    </div>
                </div>
            </div>
        </div>


</div>

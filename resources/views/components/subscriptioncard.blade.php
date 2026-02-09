<div class="flex justify-center px-6">
    <div class="flex flex-col border-2 rounded-2xl border-gray-400 w-full max-w-[1280px] py-10">

        <div class="flex flex-col lg:flex-row w-full items-start">

            <div class="flex flex-col lg:w-3/5 px-6 lg:px-16 order-2 lg:order-1">
                <h1 class="font-semibold text-2xl lg:text-4xl leading-snug max-w-[620px]">How many months do you want to <br
                        class="hidden lg:block">use Tray It?</h1>

                <div x-data="{ val: @entangle('value').live }"
                    class="w-full max-w-[600px] rounded-full border border-gray-200 bg-white p-4 flex items-center gap-4 mt-8">

                    <input type="range" min="1" max="12" x-model="val" class="w-full h-2 bg-gray-300 rounded-full appearance-none accent-[#1A76FF] cursor-pointer">

                    <div class="flex items-center justify-center w-12 h-12 rounded-full bg-white text-black font-semibold cursor-pointer">
                        <span x-text="val"></span>
                    </div>

                </div>

                <p class="text-gray-400 mt-5 max-w-[520px]">Drag the slider to update how long do you want to use Tray It</p>
            </div>

            <div
                class="flex w-full lg:w-2/5 justify-center lg:justify-end lg:mt-0 px-6 lg:px-0 lg:pr-16  order-1 lg:order-2">
                <div
                    class="w-full max-w-none lg:max-w-[380px] mb-8 border-2 border-gray-400 rounded-2xl py-5 px-6 flex flex-col gap-4">
                    <p class="text-gray-400">Information</p>
                    <div class="flex flex-col lg:mt-17">
                        <p class="lg:text-3xl text-2xl font-bold"><span id="pricePerMonth"
                                data-price="150000">Rp150.000</span></p>
                        <p class="text-gray-400">/ Month</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row items-center w-full px-6 lg:px-16 gap-8">
            <div class="flex w-full lg:w-3/5 justify-between items-center">
                <span class="text-2xl font-semibold">Total:</span>
                <span id="totalPrice" class="text-[#1A76FF] text-4xl font-bold">Rp750.000
                </span>
            </div>

            <div class="w-full lg:w-2/5 flex justify-center lg:justify-end ">
                <button class="bg-[#1A76FF] text-white py-4 rounded-xl w-full max-w-[380px] h-14 text-lg font-medium cursor-pointer">
                    Buy Now
                </button>
            </div>
        </div>

    </div>
</div>

<?php

use Livewire\Component;

new class extends Component {
    public $step = 1;

    public $email, $phone, $facebook, $instagram, $twitter;
    public $bakery_name, $location, $rt, $rw, $postcode, $province, $city;

    public function nextStep()
    {
        if ($this->step === 1) {
            $this->validate([
                'email' => '',
                'phone' => '',
            ]);
        }
        $this->step = min($this->step + 1, 3);
    }

    public function prevStep()
    {
        $this->step--;
    }

    public function submit()
    {
        dd($this->all());
    }

    public $logo;
    public $preorder = 'daily';
    public $primary_color = '#cccccc';
    public $secondary_color = '#cccccc';
    public $accent_color = '#cccccc';
    public $description;
};
?>

<div>
    @if ($step === 1)
        <div class="flex items-center justify-center pt-20">
            <div class="flex items-center">
                <div
                    class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center text-xl font-semibold">
                    1</div>
                <div class="w-24 h-1 bg-blue-600"></div>
            </div>

            <div class="flex items-center">
                <div
                    class="w-12 h-12 rounded-full border-2 border-blue-600 text-blue-600 flex items-center justify-center text-xl font-semibold">
                    2</div>
                <div class="w-24 h-1 bg-gray-300"></div>
            </div>

            <div
                class="w-12 h-12 rounded-full border-2 border-blue-600 text-blue-600 flex items-center justify-center text-xl font-semibold">
                3</div>
        </div>
        <div class="flex flex-col justify-center items-center">
            <div class="flex justify-center py-8 text-black font-semibold text-2xl">
                <h1>Input Your Info</h1>
            </div>


            <div class="space-y-6">

                <div class="w-full">
                    <x-admin.createinput wire:model="email" title="Email" type="email" image=""
                        holder="email@gmail.com" full></x-admin.createinput>
                </div>
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror



                <div class="flex flex-col md:flex-row gap-10">
                    <div class="flex-1">
                        <x-admin.createinput wire:model="phone" title="Contact Number" type="text" image=""
                            holder="Phone Number"></x-admin.createinput>
                        @error('phone')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="flex-1">
                        <x-admin.createinput wire:model="facebook" title="Facebook" type="email" image=""
                            holder="Optional"></x-admin.createinput>
                    </div>
                </div>


                <div class="flex flex-col md:flex-row gap-10">
                    <div class="flex-1">
                        <x-admin.createinput wire:model="instagram" title="Instagram" type="email" image=""
                            holder="Optional"></x-admin.createinput>
                    </div>
                    <div class="flex-1">
                        <x-admin.createinput wire:model="twitter" title="Twitter" type="email" image=""
                            holder="Optional"></x-admin.createinput>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button wire:click="nextStep"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-24.5 py-1 rounded-xl font-semibold ">Next</button>
                </div>
            </div>
        </div>
    @endif

    @if ($step === 2)
        <div class="flex items-center justify-center pt-20">
            <div class="flex items-center">
                <div
                    class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center text-xl font-semibold">
                    1</div>
                <div class="w-24 h-1 bg-blue-600"></div>
            </div>

            <div class="flex items-center">
                <div
                    class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center text-xl font-semibold">
                    2</div>
                <div class="w-24 h-1 bg-gray-300"></div>
            </div>

            <div
                class="w-12 h-12 rounded-full border-2 border-blue-600 text-blue-600 flex items-center justify-center text-xl font-semibold">
                3</div>
        </div>

        <div class="flex flex-col justify-center items-center">
            <div class="flex justify-center py-8 text-black font-semibold text-2xl">
                <h1>Input Your Bakery Info</h1>
            </div>

            <div class="space-y-6">

                <x-admin.createinput wire:model="name" title="Name" type="text" image="" holder="Bakery Name"
                    full></x-admin.createinput>
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                <x-admin.createinput wire:model="location" title="Location" type="text" image=""
                    holder="Jalan melati no. 23"></x-admin.createinput>


                <div class="flex flex-wrap gap-4">

                    <div class="w-24">
                        <x-admin.createinput wire:model="rt" title="RT" holder="003" />
                    </div>

                    <div class="w-24">
                        <x-admin.createinput wire:model="rw" title="RW" holder="004" />
                    </div>

                    <div class="w-28">
                        <x-admin.createinput wire:model="postcode" title="Post Code" holder="7177" />
                    </div>

                    <div class="flex-1">
                        <label class="text-blue-600 font-semibold text-sm block mb-1">Province</label>
                        <select wire:model="province"
                            class="border-2 border-gray-500 rounded-lg pl-4 py-1 placeholder font-normal transition>
                            <option value="">Select
                            province</option>
                            <option>DKI Jakarta</option>
                            <option>Jawa Barat</option>
                        </select>
                    </div>

                    <div class="flex-1">
                        <label class="text-blue-600 font-semibold text-sm block mb-1">City</label>
                        <select wire:model="city"
                            class="border-2 border-gray-500 rounded-lg pl-4 py-1 placeholder font-normal transition">
                            <option value="">Select city</option>
                            <option>Jakarta</option>
                            <option>Bandung</option>
                        </select>
                    </div>

                </div>

                <div class="flex justify-between">
                    <button wire:click="prevStep"
                        class="bg-gray-300 hover:bg-gray-400 text-black px-32 py-1 rounded-xl font-semibold"> Back
                    </button>

                    <button wire:click="nextStep"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-32 py-1 rounded-xl font-semibold">Next</button>
                </div>
            </div>
        </div>
    @endif

    @if ($step === 3)
        <div class="flex items-center justify-center pt-20">
            <div class="flex items-center">
                <div
                    class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center text-xl font-semibold">
                    1</div>
                <div class="w-24 h-1 bg-blue-600"></div>
            </div>
            <div class="flex items-center">
                <div
                    class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center text-xl font-semibold">
                    2</div>
                <div class="w-24 h-1 bg-blue-600"></div>
            </div>
            <div
                class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center text-xl font-semibold">
                3</div>
        </div>

        <div class="text-center pt-10 pb-4">
            <h1 class="text-3xl font-semibold">Set Up Your Bakery</h1>
        </div>

        <div class="max-w-4xl mx-auto">

            <div class="grid md:grid-cols-2 gap-2 pl-10 items-start">

                <div class="flex flex-col items-center">
                    <p class="text-blue-600 font-semibold mb-3">Logo</p>

                    <label
                        class="border-2 border-dashed border-blue-500 rounded-2xl h-48 w-48 flex flex-col items-center justify-center cursor-pointer hover:bg-blue-50 text-center">
                        <svg class="w-10 h-10 text-blue-600 mb-3" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 16V4m0 0l-4 4m4-4l4 4M4 16v4h16v-4" />
                        </svg>
                        <p class="text-xs text-blue-500">Only PNG, JPG, JPEG files are supported</p>
                        <input type="file" class="hidden" wire:model="logo">
                    </label>
                </div>

                <div class="-mx-24 mt-8">
                    <h2 class="text-blue-600 font-semibold text-xl mb-2">Your Web settings</h2>
                    <p class="text-blue-600 font-semibold mb-2">Pre-order system</p>
                    <div class="flex gap-6 mb-6">
                        <label class="flex items-center gap-2">
                            <input type="radio" wire:model="preorder" value="daily" class="accent-blue-600">
                            Every day
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" wire:model="preorder" value="week" class="accent-blue-600">
                            Week
                        </label>
                    </div>

                    <p class="text-blue-600 font-semibold mb-3">Website colors</p>
                    <div class="flex gap-10">
                        <div class="flex items-center gap-1">
                            <input type="color" wire:model="primary_color" class="w-10 h-10 border cursor-pointer">
                            <span>Primary</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <input type="color" wire:model="secondary_color"
                                class="w-10 h-10 border cursor-pointer">
                            <span>Secondary</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <input type="color" wire:model="accent_color" class="w-10 h-10 border cursor-pointer">
                            <span>Accent</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-2 flex justify-center">
                <div class="w-full max-w-xl">
                    <p class="text-blue-600 font-semibold mb-2">Description</p>

                    <textarea wire:model="description" class="w-full border rounded-xl p-3 h-28 resize-none" placeholder="Description"></textarea>
                </div>
            </div>

            <div class="mt-8 flex justify-center">
                <div class="w-full max-w-xl flex justify-between">
                    <button wire:click="prevStep"
                        class="bg-gray-300 hover:bg-gray-400 text-black px-22 py-2 rounded-xl font-semibold"> Back
                    </button>

                    <button wire:click="nextStep"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-22 py-2 rounded-xl font-semibold">Next
                    </button>
                </div>
            </div>
        </div>
    @endif


</div>

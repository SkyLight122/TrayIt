<?php

use Livewire\Component;
use App\Models\Bakery;
use App\Models\BakeryAddress;
use App\Models\City;
use App\Models\Province;
use App\Models\BakeryType;
use Livewire\WithFileUploads;
use Livewire\Attributes\Computed;

new class extends Component {
    use WithFileUploads;
    public $step = 1;
    public $provinces;
    public $cities = [];
    public $email, $phone_number, $facebook, $instagram, $x;
    public $name, $address, $rt, $rw, $post_code, $province, $city;

    public function mount(){
        $this->provinces = Province::all();
    }

    public function updatedProvince($value)
    {
        $this->city = null;
        $this->cities = City::where('province_id', $value)->get();
    }

    public function nextStep()
    {
        if ($this->step === 1) {
            $this->validate(
            [
                'email' => 'required|email|max:255',
                'phone_number' => 'required|numeric|digits_between:8,13',
            ],
            [
                'email.required' => 'Email is required.',
                'email.email' => 'Please enter a valid email address.',
                'email.max' => 'Email may not be greater than 255 characters.',
                'phone_number.required' => 'Phone number is required.',
                'phone_number.numeric' => 'Phone number must contain only numbers.',
                'phone_number.digits_between' => 'Phone number must be between 8 and 13 digits.',
            ]);
        }
        if($this->step === 2){
            $this->validate(
            [
                'name' => 'required|string|max:50',
                'address' => 'required|string',
                'rt' => 'required|numeric|digits:3',
                'rw' => 'required|numeric|digits:3',
                'post_code' => 'required|numeric|digits:4',
                'province' => 'required',
                'city' => 'required',
            ],
            [
                'name.required' => 'Name is required.',
                'name.string' => 'Name must be a valid text.',
                'name.max' => 'Name may not be greater than 50 characters.',
                'address.required' => 'Address is required.',
                'address.string' => 'Address must be a valid text.',
                'rt.required' => 'RT is required.',
                'rt.numeric' => 'RT must contain only numbers.',
                'rt.digits' => 'RT must be exactly 3 digits.',
                'rw.required' => 'RW is required.',
                'rw.numeric' => 'RW must contain only numbers.',
                'rw.digits' => 'RW must be exactly 3 digits.',
                'post_code.required' => 'Postal code is required.',
                'post_code.numeric' => 'Postal code must contain only numbers.',
                'post_code.digits' => 'Postal code must be exactly 4 digits.',
                'province.required' => 'Province is required.',
                'city.required' => 'City is required.',
            ]);
        }
        if($this->step === 3){
            $this->validate(
            [
                'primary_color' => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
                'secondary_color' => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
                'accent_color' => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
                'description' => 'nullable|string|max:500',
            ],
            [
                'primary_color.required' => 'Primary color is required.',
                'primary_color.regex' => 'Primary color must be a valid hex color code.',
                'secondary_color.required' => 'Secondary color is required.',
                'secondary_color.regex' => 'Secondary color must be a valid hex color code.',
                'accent_color.required' => 'Accent color is required.',
                'accent_color.regex' => 'Accent color must be a valid hex color code.',
                'description.string' => 'Description must be valid text.',
                'description.max' => 'Description may not be greater than 500 characters.',
            ]);

            if($this->logo){
                $this->validate(
                [
                    'logo' => 'image|mimes:jpg,jpeg,png|max:1024',
                ],
                [
                    'logo.image' => 'The logo must be an image file.',
                    'logo.mimes' => 'Logo must be a file of type: jpg, jpeg or png.',
                    'logo.max' => 'Logo size may not be greater than 1MB.',
                ]);
                $this->path = $this->logo->store('logo', 'public');
            }
            $bakery_type = BakeryType::where('type', $this->preorder)->first();
            $bakery = Bakery::create([
                'user_id' => auth()->user()->id,
                'name' => $this->name,
                'email' => $this->email,
                'phone_number' => $this->phone_number,
                'logo_path' => $this->path,
                'description' => $this->description,
                'bakery_type_id' => $bakery_type->id,
                'primary_color' => $this->primary_color,
                'secondary_color' => $this->secondary_color,
                'accent_color' => $this->accent_color,
                'facebook' => $this->facebook,
                'instagram' => $this->instagram,
                'x' => $this->x
            ]);
            BakeryAddress::create([
                'bakery_id' => $bakery->id,
                'address' => $this->address,
                'rt' => $this->rt,
                'rw' =>$this->rw,
                'post_code' => $this->post_code,
                'city_id' => $this->city,
                'province_id' => $this->province
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
    public $path = null;
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
                        <x-admin.createinput wire:model="phone_number" title="Contact Number" type="text" image=""
                            holder="Phone Number"></x-admin.createinput>
                        @error('phone_number')
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
                        <x-admin.createinput wire:model="x" title="X" type="email" image=""
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

                <x-admin.createinput wire:model="address" title="Location" type="text" image=""
                    holder="Jalan melati no. 23"></x-admin.createinput>
                    @error('address')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror


                <div class="flex flex-wrap gap-4">

                    <div class="w-24">
                        <x-admin.createinput wire:model="rt" title="RT" holder="003" />
                    </div>
                    @error('rt')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror

                    <div class="w-24">
                        <x-admin.createinput wire:model="rw" title="RW" holder="004" />
                    </div>
                    @error('rw')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror

                    <div class="w-28">
                        <x-admin.createinput wire:model="post_code" title="Post Code" holder="7177" />
                    </div>
                    @error('post_code')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror

                    <div class="flex-1">
                        <label class="text-blue-600 font-semibold text-sm block mb-1">Province</label>
                        <select wire:model.live="province"
                            class="border-2 border-gray-500 rounded-lg pl-4 py-1 placeholder font-normal transition">
                            <option value="">Select
                            Province</option>
                            @foreach ($provinces as $prov)
                                <option value="{{ $prov->id }}">{{ $prov->province }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('province')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror

                    <div class="flex-1">
                        <label class="text-blue-600 font-semibold text-sm block mb-1">City</label>
                        <select wire:model="city"
                            class="border-2 border-gray-500 rounded-lg pl-4 py-1 placeholder font-normal transition">
                            <option value="">Select City</option>
                            @foreach ($cities as $ct)
                                <option value="{{ $ct->id }}">{{ $ct->city }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('city')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror

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
                @error('logo')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                <div class="-mx-24 mt-8">
                    <h2 class="text-blue-600 font-semibold text-xl mb-2">Your Web settings</h2>
                    <p class="text-blue-600 font-semibold mb-2">Pre-order system</p>
                    <div class="flex gap-6 mb-6">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="preorder" wire:model="preorder" value="daily" class="accent-blue-600">
                            Every day
                        </label>

                        <label class="flex items-center gap-2">
                            <input type="radio" name="preorder" wire:model="preorder" value="week" class="accent-blue-600">
                            Week
                        </label>
                    </div>

                    <p class="text-blue-600 font-semibold mb-3">Website colors</p>
                    <div class="flex gap-10">
                        <div class="flex items-center gap-1">
                            <input type="color" wire:model="primary_color" class="w-10 h-10 border cursor-pointer">
                            <span>Primary</span>
                        </div>
                        @error('primary_color')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                        <div class="flex items-center gap-1">
                            <input type="color" wire:model="secondary_color"
                                class="w-10 h-10 border cursor-pointer">
                            <span>Secondary</span>
                        </div>
                        @error('secondary_color')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                        <div class="flex items-center gap-1">
                            <input type="color" wire:model="accent_color" class="w-10 h-10 border cursor-pointer">
                            <span>Accent</span>
                        </div>
                        @error('accent_color')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
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

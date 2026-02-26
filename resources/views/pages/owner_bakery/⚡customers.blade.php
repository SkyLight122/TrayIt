<?php

use Livewire\Component;

new class extends Component {

    public array $selectedCustomers = [];
    public bool $selectAll = false;
    public int $totalCustomers = 30;

    public function updatedSelectAll()
    {
        if ($this->selectAll) {
            $this->selectedCustomers = collect(range(1, $this->totalCustomers))
            ->map(fn ($id) => (string) $id)
            ->toArray();
        } else {
            $this->selectedCustomers = [];
        }
    }

    public function updatedSelectedCustomers()
    {
        $this->selectAll = count($this->selectedCustomers) === $this->totalCustomers;
    }
};
?>

<div class="h-screen bg-blue-50 flex overflow-hidden">
    <x-admin.sidebar></x-admin.sidebar>
    <div class="flex-1 ml-68 flex flex-col">
        <x-admin.header></x-admin.header>

        <main class="flex-1">
            <div class="flex items-center justify-between px-8">
                <h1 class="text-black text-3xl font-semibold">Database Customers</h1>
                <div class="flex space-x-4">
                    <button class="h-full py-1 mt-4 px-6 text-white rounded-lg bg-blue-500 shadow-xl/20 flex flex-row">
                        <img src="images/sendicon.png" class="w-6 h-6 flex mr-1">
                        <p>Send Email</p>
                    </button>
                </div>
            </div>
            <p class="px-8 text-gray-500 pb-4">View all of your customers</p>

            <div class="flex flex-row space-x-4 px-8">

                <div class="w-full bg-white rounded-2xl shadow-xl/60 overflow-hidden flex flex-col max-h-[490px] overflow-y-auto">
                    <table class="w-full text-center border-collapse">
                        <thead class="bg-white sticky top-0 z-10">
                            <tr class="text-gray-500 text-md border-b">
                                <th class="py-3 px-6 w-[5%]">
                                    <input type="checkbox" wire:model.live="selectAll" class="w-5 h-5">
                                </th>
                                <th class="py-3 px-6 font-medium w-[10%]">Id</th>
                                <th class="py-3 px-6 font-medium w-[16%]">Username</th>
                                <th class="py-3 px-6 font-medium w-[16%]">Phone Number</th>
                                <th class="py-3 px-6 font-medium w-[12%]">Email</th>
                            </tr>
                        </thead>

                        <tbody class="text-black">
                            @for ($i = 1; $i <= $totalCustomers; $i++)
                                <tr wire:key="customer-{{ $i }}" class="border-b hover:bg-gray-50 transition text-center">
                                    <td class="py-4 px-6">
                                        <input type="checkbox" value="{{ (string) $i }}"  wire:model.live="selectedCustomers" class="w-5 h-5">
                                    </td>
                                    <td class="py-4 px-6">0123456</td>
                                    <td class="py-4 px-6">Michael Brown</td>
                                    <td class="py-4 px-6">+6211111111111</td>
                                    <td class="py-4 px-6">email@gmail.com</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>


            </div>
        </main>
    </div>
</div>

<?php
use Livewire\Component;
// use Livewire\Attributes\Computed;
use Livewire\WithPagination;
use App\Models\Order;
use App\Models\OrderProduct;
new class extends Component {
    // public function mount($id){
    // $this->bakery_id = $id;
    // }

    use WithPagination;

    public $bakery_id;

    public function getOrdersProperty()
    {
        return Order::with('order_products.product')->paginate(9);
    }
};
?>
<div class="h-screen bg-blue-50 flex overflow-hidden">
    <x-admin.sidebar></x-admin.sidebar>
    <div class="flex-1 ml-68 flex flex-col">
        <x-admin.header></x-admin.header>
        <main class="flex-1 flex flex-col overflow-hidden bg-blue-50">
            <div class="flex items-center justify-between px-8">
                <h1 class="text-black text-3xl font-semibold">Manage Orders</h1>
                <div class="flex space-x-4"> <button
                        class="h-full py-1 mt-4 px-4 rounded-lg bg-white shadow-xl/20 flex flex-row">
                        <img src="images/filtericon.png" class="w-6 h-6 flex mr-1">
                        <p>Filter by <span class="text-blue-500"> <i>Week</i></span></p>
                    </button> <button class="h-full py-1 mt-4 px-4 rounded-lg bg-white shadow-xl/20 flex flex-row">
                        <img src="images/dateicon.png" class="w-6 h-6 flex mr-1">
                        <p>January, 2026</p>
                    </button> </div>
            </div>
            <p class="px-8 text-gray-500 pb-4">View all of your orders</p>
            <div class="flex flex-col flex-1 overflow-hidden">
                <div class="space-y-4 px-8">
                    <div class="w-full bg-white rounded-2xl shadow-xl/60 overflow-hidden flex flex-col">
                        <table class="w-full text-center border-collapse">
                            <thead class="bg-white">
                                <tr class="text-gray-500 text-md border-b">
                                    <th class="py-4 px-6 font-medium w-[10%]">Order id</th>
                                    <th class="py-4 px-6 font-medium w-[16%]">Customer Name</th>
                                    <th class="py-4 px-6 font-medium w-[14%]">Date</th>
                                    <th class="py-4 px-6 font-medium w-[16%]">Amount</th>
                                    <th class="py-4 px-6 font-medium w-[14%]">Payment</th>
                                    <th class="py-4 px-6 font-medium w-[14%]">Status</th>
                                    <th class="py-4 px-6 font-medium w-[12%]">Action</th>
                                </tr>
                            </thead>
                        </table>

                        <div class="max-h-[420px] overflow-y-auto">
                            <table class="w-full text-left border-collapse">
                                <tbody class="text-black">
                                    {{-- @foreach ($this->orders as $order) --}}
                                    @for ($i = 0; $i < 20; $i++)
                                        <tr class="border-b hover:bg-gray-50 transition text-center">
                                            <td class="py-3 px-6">0123456</td>
                                            <td class="py-3 px-6">Michael Brown</td>
                                            <td class="py-3 px-6">2025/04/21</td>
                                            <td class="py-3 px-6">Rp0.000.000.000</td>
                                            <td class="py-3 px-6">Master Card</td>
                                            <td class="py-3 px-6 relative" x-data="{
                                                open: false,
                                                status: 'In Production',
                                                dropUp: false,
                                                toggle(el) {
                                                    this.open = !this.open

                                                    this.$nextTick(() => {
                                                        const scrollContainer = el.closest('.overflow-y-auto')
                                                        const rect = el.getBoundingClientRect()
                                                        const containerRect = scrollContainer.getBoundingClientRect()

                                                        const spaceBelow = containerRect.bottom - rect.bottom
                                                        const dropdownHeight = 220
                                                        this.dropUp = spaceBelow < dropdownHeight
                                                    })
                                                }
                                            }">
                                                <button @click="toggle($el)"
                                                    :class="{
                                                        'bg-yellow-100 text-yellow-700': status === 'In Production',
                                                        'bg-green-100 text-green-700': status === 'Ready',
                                                        'bg-red-100 text-red-700': status === 'Cancelled',
                                                        'bg-blue-100 text-blue-700': status === 'Done'
                                                    }"
                                                    class="px-3 py-1 text-xs rounded-lg font-medium transition w-full h-full">
                                                    <span x-text="status"></span>
                                                </button>
                                                <div x-show="open" @click.outside="open = false" x-transition
                                                    class="absolute right-0 w-44 bg-white border-2 border-gray-200 rounded-xl shadow-xl/20 p-3 space-y-2 z-50"
                                                    :class="dropUp ? 'bottom-full mb-2' : 'mt-2'">

                                                    <p class="font-semibold text-black mb-4 text-center">Choose Status
                                                    </p>

                                                    <button @click="status='In Production'; open=false"
                                                        class="w-full px-3 py-1 rounded-lg bg-yellow-100 text-yellow-700 text-center">In
                                                        Production
                                                    </button>

                                                    <button @click="status='Ready'; open=false"
                                                        class="w-full px-3 py-1 rounded-lg bg-green-100 text-green-700 text-center">Ready
                                                    </button>

                                                    <button @click="status='Cancelled'; open=false"
                                                        class="w-full px-3 py-1 rounded-lg bg-red-100 text-red-700 text-center">Cancelled
                                                    </button>

                                                    <button @click="status='Done'; open=false"
                                                        class="w-full px-3 py-1 rounded-lg bg-blue-100 text-blue-700 text-center">Done
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6 text-center"> <button
                                                    class="w-7 h-7 flex items-center justify-center rounded-full border-2 border-blue-500 text-blue-500 ml-8 font-semibold">i
                                                </button> </td>
                                        </tr>
                                    @endfor
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <x-admin.footer :paginator="$this->orders"></x-admin.footer>

                </div>
            </div>
        </main>
    </div>
</div>

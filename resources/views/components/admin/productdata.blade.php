@props([
    'title' => 'No title',
])

<div class="flex flex-col w-[464px] rounded-xl h-58 p-4 bg-white custom-shadow">
    <h1 class="text-blue-500 px-6 font-semibold text-base">{{ $title }}</h1>

    <div class="overflow-y-auto flex-1">
        <table class="w-full text-center table-fixed">
            <thead class="bg-white sticky top-0 z-10">
                <tr class="text-gray-500 border-b h-full border-collapse border-gray-300">
                    <th class="py-2 px-6 font-normal text-sm w-[10%]">Product Name</th>
                    <th class="py-2 px-6 font-normal text-sm w-[10%]">Sold</th>
                </tr>
            </thead>

            <tbody class="text-black">
                @for ($i = 0; $i < 20; $i++)
                    <tr class="border-b border-gray-300 hover:bg-gray-50 transition text-center">
                        <td class="py-2 px-6">
                            <div class="flex items-center space-x-3">
                                <img src="images/product.png" class="w-10 h-10 rounded-lg object-cover">
                                <span>Bombon</span>
                            </div>
                        </td>

                        <td class="py-2 text-center">100</td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>

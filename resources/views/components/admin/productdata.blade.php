@props([
    'title' => 'No title',
])

<div class="flex flex-col w-[464px] rounded-xl h-58 p-4 bg-white shadow-xl/10">
    <h1 class="text-blue-500 px-6 font-semibold text-base">{{ $title }}</h1>

    <div class="overflow-y-auto flex-1">
        <table class="w-full text-center border-collapse table-fixed">
            <thead class="bg-white sticky top-0 z-10">
                <tr class="text-gray-500 border-b h-full">
                    <th class="py-2 px-6 font-normal text-sm w-[14%]"></th>
                    <th class="py-2 px-6 font-normal text-sm w-[10%]">Profile</th>
                    <th class="py-2 px-6 font-normal text-sm w-[10%]">Sold</th>
                </tr>
            </thead>

            <tbody class="text-black">
                @for ($i = 0; $i < 20; $i++)
                    <tr class="border-b hover:bg-gray-50 transition text-center">
                        <td class="py-2 px-4">
                            <img src="images/product.png" class="w-10 h-10 rounded-lg object-cover mx-auto">
                        </td>
                        <td class="py-2 px-4">Bomboloni</td>
                        <td class="py-2 px-4">100</td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>

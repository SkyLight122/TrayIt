@props([
    'title' => 'No title',
])

<div class="flex flex-col w-[720px] rounded-xl h-58 p-4 bg-white custom-shadow">
    <h1 class="text-blue-500 px-6 font-semibold text-base">{{ $title }}</h1>

    <div class="overflow-y-auto">
        <table class="w-full text-center ">
            <thead class="bg-white sticky top-0 z-10">
                <tr class="text-gray-500 border-b h-full border-collapse border-gray-300">
                    <th class="py-2 px-6 font-normal text-sm w-[14%]">Order Id</th>
                    <th class="py-2 px-6 font-normal text-sm w-[10%]">Profile</th>
                    <th class="py-2 px-6 font-normal text-sm w-[10%]">Username</th>
                    <th class="py-2 px-6 font-normal text-sm w-[6%]">Email</th>
                    <th class="py-2 px-6 font-normal text-sm w-[17%]">Phone Number</th>
                    <th class="py-2 px-6 font-normal text-sm w-[10%]">Action</th>
                </tr>
            </thead>

            <tbody class="text-black">
                @for ($i = 0; $i < 20; $i++)
                    <tr class="border-b  border-gray-300 hover:bg-gray-50 transition text-center">
                        <td class="py-2 px-4">001</td>
                        <td class="py-2 px-4">
                            <img src="images/customer.png" class="w-10 h-10 rounded-lg object-cover mx-auto">
                        </td>
                        <td class="py-2 px-4">Bob</td>
                        <td class="py-2 px-4">bob@gmail.com</td>
                        <td class="py-2 px-6">+62123123123</td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>

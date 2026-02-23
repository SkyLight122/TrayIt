<div class="min-h-screen flex ">
    <aside class="fixed left-0 top-0 h-screen w-68 bg-white text-white p-8 flex items-center flex-col shadow-lg/30">
        <h1 class="my-4 p-1 w-full text-2xl font-medium flex justify-center text-blue-500">Bakery Name</h1>

        <div class="hover:bg-blue-500 rounded-xl my-4 pt-1 pr-1 pb-1 w-full flex flex-row">
            <img src="images/dashicon.png" class="w-6 h-6 m-1">
            <a href="{{route('dashboard')}}" class="text-xl pl-8 text-gray-500 hover:text-white">Dashboard</a>
        </div>
        <div class="hover:bg-blue-500 rounded-xl my-4 pt-1 pr-1 pb-1 w-full flex flex-row">
            <img src="images/ordericon.png" class="w-6 h-6 m-1">
            <a href="{{route('orders')}}" class="text-xl pl-8 text-gray-500 hover:text-white">Orders</a>
        </div>
        <div class="hover:bg-blue-500 rounded-xl my-4 pt-1 pr-1 pb-1 w-full flex flex-row">
            <img src="images/customericon.png" class="w-6 h-6 m-1">
            <a href="{{route('customers')}}" class="text-xl pl-8 text-gray-500 hover:text-white">Customers</a>
        </div>
        <div class="hover:bg-blue-500 rounded-xl my-4 pt-1 pr-1 pb-1 w-full flex flex-row">
            <img src="images/producticon.png" class="w-6 h-6 m-1">
            <a href="" class="text-xl pl-8 text-gray-500 hover:text-white">Products</a>
        </div>
        <div class="hover:bg-blue-500 rounded-xl my-4 pt-1 pr-1 pb-1 w-full flex flex-row">
            <img src="images/hppicon.png" class="w-6 h-6 m-1">
            <a href="" class="text-xl pl-8 text-gray-500 hover:text-white">HPP</a>
        </div>

        <div class="hover:bg-blue-500 rounded-xl mt-44 pt-1 pr-1 pb-1 w-full flex flex-row">
            <img src="images/logouticon.png" class="w-6 h-6 m-1">
            <a href="" class="text-xl pl-8 text-gray-500 hover:text-white">Log out</a>
        </div>
    </aside>
</div>

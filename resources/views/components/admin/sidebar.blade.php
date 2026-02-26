<div class="min-h-screen flex ">
    <aside class="fixed left-0 top-0 h-screen w-68 bg-white text-white p-8 flex items-center flex-col shadow-lg/30">
        <h1 class="my-4 p-1 w-full text-2xl font-medium flex justify-center text-blue-500">Bakery Name</h1>

        <a href="{{route('dashboard')}}" class="group hover:bg-blue-500 rounded-xl my-2 pt-1 pb-1 w-[90%] mx-auto flex flex-row items-center {{ request()->routeIs('dashboard') ? 'bg-blue-500' : 'hover:bg-blue-500' }}">
            <img src="images/dashicon.png" class="w-6 h-6 m-1 ml-4 group-hover:brightness-0 group-hover:invert {{request()->routeIs('dashboard') ? 'brightness-0 invert' : 'group-hover:brightness-0 group-hover:invert'}}">
            <span class="text-xl pl-4 text-gray-500 hover:text-white {{ request()->routeIs('dashboard') ? 'text-white' : 'text-gray-500 group-hover:text-white' }}">
                Dashboard
            </span>
        </a>

        <a href="{{route('orders')}}" class="group hover:bg-blue-500 rounded-xl my-2 pt-1 pb-1 w-[90%] mx-auto flex flex-row items-center {{ request()->routeIs('orders') ? 'bg-blue-500' : 'hover:bg-blue-500' }}">
            <img src="images/ordericon.png" class="w-6 h-6 m-1 ml-4 group-hover:brightness-0 group-hover:invert {{request()->routeIs('orders') ? 'brightness-0 invert' : 'group-hover:brightness-0 group-hover:invert'}}">
            <span class="text-xl pl-4 text-gray-500 hover:text-white {{ request()->routeIs('orders') ? 'text-white' : 'text-gray-500 group-hover:text-white' }}">
                Orders
            </span>
        </a>

        <a href="{{route('customers')}}" class="group hover:bg-blue-500 rounded-xl my-2 pt-1 pb-1 w-[90%] mx-auto flex flex-row items-center {{ request()->routeIs('customers') ? 'bg-blue-500' : 'hover:bg-blue-500' }}">
            <img src="images/customericon.png" class="w-6 h-6 m-1 ml-4 group-hover:brightness-0 group-hover:invert {{request()->routeIs('customers') ? 'brightness-0 invert' : 'group-hover:brightness-0 group-hover:invert'}}">
            <span class="text-xl pl-4 text-gray-500 hover:text-white {{ request()->routeIs('customers') ? 'text-white' : 'text-gray-500 group-hover:text-white' }}">
                Customers
            </span>
        </a>

        <a href="{{route('products')}}" class="group hover:bg-blue-500 rounded-xl my-2 pt-1 pb-1 w-[90%] mx-auto flex flex-row items-center {{ request()->routeIs('products') ? 'bg-blue-500' : 'hover:bg-blue-500' }}">
            <img src="images/producticon.png" class="w-6 h-6 m-1 ml-4 group-hover:brightness-0 group-hover:invert {{request()->routeIs('products') ? 'brightness-0 invert' : 'group-hover:brightness-0 group-hover:invert'}}">
            <span class="text-xl pl-4 text-gray-500 hover:text-white {{ request()->routeIs('products') ? 'text-white' : 'text-gray-500 group-hover:text-white' }}">
                Products
            </span>
        </a>

        <a href="{{route('hpp')}}" class="group hover:bg-blue-500 rounded-xl my-2 pt-1 pb-1 w-[90%] mx-auto flex flex-row items-center {{ request()->routeIs('hpp') ? 'bg-blue-500' : 'hover:bg-blue-500' }}">
            <img src="images/hppicon.png" class="w-6 h-6 m-1 ml-4 group-hover:brightness-0 group-hover:invert {{request()->routeIs('hpp') ? 'brightness-0 invert' : 'group-hover:brightness-0 group-hover:invert'}}">
            <span class="text-xl pl-4 text-gray-500 hover:text-white {{ request()->routeIs('hpp') ? 'text-white' : 'text-gray-500 group-hover:text-white' }}">
                HPP
            </span>
        </a>

        <a href="{{route('logout')}}" class="group hover:bg-blue-500 rounded-xl mt-64 pt-1 pb-1 w-[90%] mx-auto flex flex-row items-center {{ request()->routeIs('logout') ? 'bg-blue-500' : 'hover:bg-blue-500' }}">
            <img src="images/logouticon.png" class="w-6 h-6 m-1 ml-4 group-hover:brightness-0 group-hover:invert {{request()->routeIs('logout') ? 'brightness-0 invert' : 'group-hover:brightness-0 group-hover:invert'}}">
            <span class="text-xl pl-4 text-gray-500 hover:text-white {{ request()->routeIs('logout') ? 'text-white' : 'text-gray-500 group-hover:text-white' }}">
                Log out
            </span>
        </a>

    </aside>
</div>

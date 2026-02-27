<div class="font-[poppins] flex justify-center items-center gap-90  text-[#522C12] p-5 w-full">

    <a href="/home" class="font-medium text-[20px] cursor-pointer ">Bright Place</a>

    <div class="flex gap-15">
        <a href="/home">Home</a>
        <a href="/product">Product</a>
        <a href="/history" class="{{ request()->routeIs('home') ? 'text-[#FFF8F0]' : 'text-[#522C12]' }}">History</a>
        <a href="/aboutus" class="{{ request()->routeIs('home') ? 'text-[#FFF8F0]' : 'text-[#522C12]' }}">About Us</a>
    </div>

    <div class="flex items-center justify-center gap-5 cursor-pointer ">
        <p class="{{ request()->routeIs('home') ? 'text-[#FFF8F0]' : 'text-[#522C12]' }} ">James Doe</p>
        <img class="size-10 rounded-full" src="/assets/images/bakery/header/profile.jpg">
    </div>

</div>
<div class="font-[poppins] flex justify-center items-center gap-90  text-[#88481E] p-5 w-full">

    <h1 class="font-medium text-[20px]">Bright Place</h1>

    <div class="flex gap-15">
        <a href="/home">Home</a>
        <a href="/product">Product</a>
        <a href="/history" class="{{ request()->routeIs('home') ? 'text-[#FFF8F0]' : 'text-[#88481e]' }}">History</a>
        <a href="/aboutus" class="{{ request()->routeIs('home') ? 'text-[#FFF8F0]' : 'text-[#88481e]' }}">About Us</a>
    </div>

    <div class="flex items-center justify-center gap-5">
        <p class="{{ request()->routeIs('home') ? 'text-[#FFF8F0]' : 'text-[#88481e]' }}">James Doe</p>
        <img class="size-10 rounded-full" src="/assets/images/bakery/header/profile.jpg">
    </div>

</div>
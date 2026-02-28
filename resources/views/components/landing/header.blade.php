<header class="sticky top-0 bg-white px-6 sm:px-8 lg:px-12 py-4 relative z-50">
    <div class="flex items-center justify-between md:grid md:grid-cols-3">
        <h1 class="text-[#1A76FF] text-2xl sm:text-3xl font-bold">
            TrayIt
        </h1>

        <nav class="hidden md:flex justify-center gap-[6vw] text-xl">
            <a href="#home" class="text-[#6B6B6B] hover:text-gray-600">Home</a>
            <a href="#features" class="text-[#6B6B6B] hover:text-gray-600">Features</a>
            <a href="#service" class="text-[#6B6B6B] hover:text-gray-600">Service</a>
        </nav>

        <div class="flex items-center justify-end gap-3">
            <a href="{{ route('login') }}">
                <button
                    class="hidden md:block border-2 bg-[#1A76FF] text-white rounded-xl px-5 h-11 text-sm sm:text-base cursor-pointer hover:bg-blue-600">
                    My Account
                </button>
            </a>

            <button id="menuBtn" class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-blue-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>
</header>

<div id="overlay" class="fixed inset-0 bg-black/40 hidden z-40 transition-opacity">
</div>

<aside id="sidebar"
    class="fixed top-0 right-0 h-full w-[50vw] max-w-[320px] bg-white
            translate-x-full transition-transform duration-300 ease-in-out z-50 text-white">

    <div class="p-6 flex flex-col gap-6">

        <div class="flex justify-end">
            <button id="closeBtn" class="text-white/70 text-2xl">&times;</button>
        </div>

        <div class="flex flex-col items-center gap-3 text-center">
            <div class="relative">
                <img src="" class="w-20 h-20 rounded-full border-2 border-black object-cover" />
            </div>

            <div class="flex flex-row items-center justify-center gap-1">
                <a href="/login" class="text-lg text-black hover:underline">
                    Log In
                </a>
                <span class="text-black">/</span>
                <a href="/register" class="text-lg text-black hover:underline">
                    Sign Up
                </a>
            </div>
        </div>


        <div class="h-px bg-black/20 my-2"></div>

        <nav class="flex flex-col gap-4 text-lg">
            <a href="#" class="text-black hover:text-red-500 focus:text-[#1A76FF]">Home</a>
            <a href="#" class="text-black hover:text-red-500 focus:text-[#1A76FF]">Features</a>
            <a href="#" class="text-black hover:text-red-500 focus:text-[#1A76FF]">Service</a>
        </nav>

    </div>
</aside>

<script>
    const menuBtn = document.getElementById('menuBtn');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    const closeBtn = document.getElementById('closeBtn');

    function openSidebar() {
        sidebar.classList.remove('translate-x-full');
        overlay.classList.remove('hidden');
    }

    function closeSidebar() {
        sidebar.classList.add('translate-x-full');
        overlay.classList.add('hidden');
    }

    menuBtn.addEventListener('click', openSidebar);
    closeBtn.addEventListener('click', closeSidebar);
    overlay.addEventListener('click', closeSidebar);
</script>

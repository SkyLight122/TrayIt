@props([
    'search' => '',
])


<div class="bg-blue-50 h-12 flex items-center justify-end px-8">
    <div class="flex flex-row space-x-4">
        <div class="flex flex-row space-x-4 mt-1">
            <a href="{{ $search }}">
                <img src="images/searchicon.png" class="w-6 h-6">
            </a>
            <a href="">
                <img src="images/notificationicon.png" class="w-6 h-6">
            </a>
            <a href="">
                <img src="images/settingicon.png" class="w-6 h-6">
            </a>
        </div>
        <img src="images/profile.png" class="w-8 h-8 rounded-full">
    </div>
</div>

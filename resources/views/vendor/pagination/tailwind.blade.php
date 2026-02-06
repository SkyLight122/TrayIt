@if ($paginator->hasPages())
    <nav class="flex justify-center items-center gap-3 mt-10">

        {{-- Previous --}}
        @if ($paginator->onFirstPage())
            <span class="text-gray-300">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M15 18l-6-6 6-6"/>
                </svg>
            </span>
        @else
            <button wire:click="previousPage" class="text-gray-600 hover:text-black">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M15 18l-6-6 6-6"/>
                </svg>
            </button>
        @endif

        {{-- Page Numbers --}}
        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="w-9 h-9 flex items-center justify-center rounded-full bg-blue-600 text-white font-semibold">
                            {{ $page }}
                        </span>
                    @else
                        <button wire:click="gotoPage({{ $page }})"
                            class="w-9 h-9 flex items-center justify-center rounded-full text-gray-700 hover:bg-gray-200 transition">
                            {{ $page }}
                        </button>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next --}}
        @if ($paginator->hasMorePages())
            <button wire:click="nextPage" class="text-gray-600 hover:text-black">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M9 6l6 6-6 6"/>
                </svg>
            </button>
        @else
            <span class="text-gray-300">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M9 6l6 6-6 6"/>
                </svg>
            </span>
        @endif

    </nav>
@endif

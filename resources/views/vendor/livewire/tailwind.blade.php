@if ($paginator->hasPages())
    <nav class="flex justify-center items-center gap-3 mt-10">

        @if ($paginator->onFirstPage())
            <span class="text-gray-300">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M15 18l-6-6 6-6" />
                </svg>
            </span>
        @else
            <button wire:click="previousPage" class="text-gray-600 hover:text-black">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M15 18l-6-6 6-6" />
                </svg>
            </button>
        @endif

        @php
            $current = $paginator->currentPage();
            $last = $paginator->lastPage();

            $start = max($current - 1, 1);
            $end = min($start + 2, $last);

            if ($end - $start < 2) {
                $start = max($end - 2, 1);
            }
        @endphp

        @for ($page = $start; $page <= $end; $page++)
            @if ($page == $current)
                <span
                    class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 text-white font-semibold">
                    {{ $page }}
                </span>
            @else
                <button wire:click="gotoPage({{ $page }})"
                    class="w-10 h-10 flex items-center justify-center rounded-full text-gray-700 hover:bg-gray-200 transition">
                    {{ $page }}
                </button>
            @endif
        @endfor

        @if ($paginator->hasMorePages())
            <button wire:click="nextPage" class="text-gray-600 hover:text-black">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M9 6l6 6-6 6" />
                </svg>
            </button>
        @else
            <span class="text-gray-300">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M9 6l6 6-6 6" />
                </svg>
            </span>
        @endif

    </nav>
@endif

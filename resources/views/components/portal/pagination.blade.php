@if ($paginator->hasPages())
@php
    $current = $paginator->currentPage();
    $last = $paginator->lastPage();

    // window size
    $start = max(1, $current - 1);
    $end   = min($last, $current + 1);

    // always show 3 if possible
    if ($current == 1) {
        $end = min(3, $last);
    }

    if ($current == $last) {
        $start = max(1, $last - 2);
    }
@endphp

<nav class="flex justify-center mt-12 pb-30">
    <ul class="flex items-center gap-4 text-lg font-medium">

        {{-- Prev --}}
        <button
            wire:click="previousPage"
            @disabled($paginator->onFirstPage())
            class="text-black disabled:opacity-30">
            ‹
        </button>

        {{-- Pages --}}
        @for ($page = $start; $page <= $end; $page++)
            @if ($page === $current)
                <span
                    class="flex items-center justify-center
                           w-10 h-10 rounded-full
                           bg-[#1A76FF] text-white">
                    {{ $page }}
                </span>
            @else
                <button
                    wire:click="gotoPage({{ $page }})"
                    class="w-10 h-10 flex items-center justify-center
                           text-black hover:text-[#1A76FF]
                           transition">
                    {{ $page }}
                </button>
            @endif
        @endfor

        {{-- Next --}}
        <button
            wire:click="nextPage"
            @disabled(! $paginator->hasMorePages())
            class="text-black disabled:opacity-30">
            ›
        </button>

    </ul>
</nav>
@endif

@props(['paginator'])
@php
            $current = $paginator->currentPage();
            $last = $paginator->lastPage();
        @endphp

@if ($paginator->hasPages())
    <div class="flex items-center space-x-2">


        {{-- Previous Arrow --}}
        @if ($paginator->onFirstPage())
            <button disabled
                class="w-8 h-8 flex items-center justify-center rounded-lg border text-gray-300">
                ←
            </button>
        @else
            <button wire:click="previousPage"
                class="w-8 h-8 flex items-center justify-center rounded-lg border hover:bg-gray-100">
                ←
            </button>
        @endif


        {{-- Page Numbers --}}
        @if ($last <= 5)

            @for ($page = 1; $page <= $last; $page++)
                <button wire:click="gotoPage({{ $page }})"
                    class="w-8 h-8 flex items-center justify-center rounded-lg border
                    {{ $page == $current ? 'bg-blue-500 text-white border-blue-500' : 'hover:bg-gray-100' }}">
                    {{ $page }}
                </button>
            @endfor

        @else

            {{-- First Page --}}
            <button wire:click="gotoPage(1)"
                class="w-8 h-8 flex items-center justify-center rounded-lg border
                {{ $current == 1 ? 'bg-blue-500 text-white border-blue-500' : 'hover:bg-gray-100' }}">
                1
            </button>

            {{-- Left Dots --}}
            @if ($current > 3)
                <span class="w-8 text-center">...</span>
            @endif

            {{-- Pages Around Current --}}
            @for ($page = max(2, $current - 1); $page <= min($last - 1, $current + 1); $page++)
                <button wire:click="gotoPage({{ $page }})"
                    class="w-8 h-8 flex items-center justify-center rounded-lg border
                    {{ $page == $current ? 'bg-blue-500 text-white border-blue-500' : 'hover:bg-gray-100' }}">
                    {{ $page }}
                </button>
            @endfor

            {{-- Right Dots --}}
            @if ($current < $last - 2)
                <span class="w-8 text-center">...</span>
            @endif

            {{-- Last Page --}}
            <button wire:click="gotoPage({{ $last }})"
                class="w-8 h-8 flex items-center justify-center rounded-lg border
                {{ $current == $last ? 'bg-blue-500 text-white border-blue-500' : 'hover:bg-gray-100' }}">
                {{ $last }}
            </button>

        @endif


        {{-- Next Arrow --}}
        @if ($paginator->hasMorePages())
            <button wire:click="nextPage"
                class="w-8 h-8 flex items-center justify-center rounded-lg border hover:bg-gray-100">
                →
            </button>
        @else
            <button disabled
                class="w-8 h-8 flex items-center justify-center rounded-lg border text-gray-300">
                →
            </button>
        @endif

    </div>
@endif

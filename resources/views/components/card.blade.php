@props(['title' => null, 'actions' => null])

<div class="card bg-base-100 shadow-xl md:w-2/3 w-full">
    <div class="card-body mb-4">
        @if ($title)
            <div class="card-title">{{ $title }}</div>
        @endif

        {{ $slot }}
        @if ($actions)
            <div class="card-actions flex items-center justify-between mt-6">
                {{ $actions }}
            </div>
        @endif
    </div>

</div>

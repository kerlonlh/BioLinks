@props(['title', 'actions'])

<div class="card bg-base-100 shadow-xl w-2/3">
    <div class="card-body mb-4">
        <div class="card-title">{{ $title }}</div>

        {{ $slot }}

        <div class="card-actions flex items-center justify-between mt-6">
            {{ $actions }}
        </div>
    </div>

</div>

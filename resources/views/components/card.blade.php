@props(['title', 'actions'])

<div class="card bg-base-100 shadow-xl w-96">
    <div class="card-body">
        <div class="card-title">{{ $title }}</div>

        {{ $slot }}

        <div class="card-actions">
            {{ $actions }}
        </div>
    </div>

</div>

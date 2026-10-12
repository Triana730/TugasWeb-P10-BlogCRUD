@props(['title' => null])

<div class="card mb-3 shadow-sm">
    <div class="card-body">
        @if ($title)
            <h5 class="card-title">{{ $title }}</h5>
        @endif
        {{ $slot }}
    </div>
</div>
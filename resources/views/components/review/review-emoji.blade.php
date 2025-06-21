@php
    $icons = [
        1 => "<i class='bi bi-emoji-frown-fill text-danger'></i>",
        2 => "<i class='bi bi-emoji-neutral-fill text-warning'></i>",
        3 => "<i class='bi bi-emoji-smile-fill text-success'></i>",
    ];
@endphp

{!! $icons[$satisfaction] ?? '' !!}
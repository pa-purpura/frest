<a class="dropdown-item" {{ $attributes->merge(['data-language' => '']) }}  >
    <i {{ $attributes->merge(['class' => '']) }}></i>
    <span class="align-middle">{{ $slot }}</span>
</a>

{{-- href="javascript:void(0);" --}}
<a class="dropdown-item" {{ $attributes->merge(['data-language' => '']) }} href="javascript:void(0);" >
    <i {{ $attributes->merge(['class' => '']) }}></i>
    <span class="align-middle">{{ $slot }}</span>
</a>
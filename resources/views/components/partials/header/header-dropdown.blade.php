<a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown"
    data-bs-auto-close="outside" aria-expanded="false">

    <i {{ $attributes->merge(['class' => '']) }}></i>

    @if($message)
        <span class="badge bg-danger rounded-pill badge-notifications">{{ $message }}</span>
    @endif
</a>

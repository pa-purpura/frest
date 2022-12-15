@props([
    'src' => '',
    'alt' => 'image',
])

<a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
    <div class="avatar avatar-online">
        <img src={{ $src }} alt={{ $alt }} class="rounded-circle" />
    </div>
</a>

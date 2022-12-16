<div class="navbar-nav align-items-center">
    <div class="nav-item navbar-search-wrapper mb-0">
        <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
            <i {{ $attributes->merge(['class' => '']) }}></i>
            <span class="d-none d-md-inline-block text-muted">{{ $slot }}</span>
        </a>
    </div>
</div>

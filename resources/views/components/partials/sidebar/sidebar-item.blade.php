<a class="menu-link" {{$attributes->merge(['href' => ''])}}>
    <i {{$attributes->merge(['class' => 'app-menu__icon'])}} ></i>
    <span class="app-menu__label">{{ $slot }}</span>
</a>
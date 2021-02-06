<li class="nav-item">
    <a href="{{ route('categorias.index') }}"
       class="nav-link {{ Request::is('categorias*') ? 'active' : '' }}">
        <p>@lang('models/categorias.plural')</p>
    </a>
</li>

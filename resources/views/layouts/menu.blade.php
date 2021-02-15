<li class="nav-item">
    <a href="{{ route('categorias.index') }}"
       class="nav-link {{ Request::is('categorias*') ? 'active' : '' }}">
        <p>@lang('models/categorias.plural')</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('productos.index') }}"
       class="nav-link {{ Request::is('productos*') ? 'active' : '' }}">
        <p>@lang('models/productos.plural')</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('usuarios.index') }}"
       class="nav-link {{ Request::is('usuarios*') ? 'active' : '' }}">
        <p>@lang('models/usuarios.plural')</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('ventas.index') }}"
       class="nav-link {{ Request::is('ventas*') ? 'active' : '' }}">
        <p>@lang('models/ventas.plural')</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('detalleVentas.index') }}"
       class="nav-link {{ Request::is('detalleVentas*') ? 'active' : '' }}">
        <p>@lang('models/detalleVentas.plural')</p>
    </a>
</li>
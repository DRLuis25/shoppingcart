<aside class="main-sidebar sidebar-primary elevation-4">
    <h3><span class="">Categorias</span></h3>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('categorias.index') }}"
                       class="nav-link {{ Request::is('categorias*') ? 'active' : '' }}">
                        <p>Categoria 1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('productos.index') }}"
                       class="nav-link {{ Request::is('productos*') ? 'active' : '' }}">
                        <p>Categoria 2</p>
                    </a>
                </li>                
            </ul>
        </nav>
    </div>

</aside>
